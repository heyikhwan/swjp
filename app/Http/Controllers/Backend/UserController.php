<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAdminRequest;
use App\Http\Requests\UserRequest;
use App\Models\Customer;
use App\Models\Fasilitator;
use App\Models\User;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['customer', 'fasilitator'])->get();

        return view('backend.user.index', [
            'users' => $users
        ]);
    }

    public function createAdmin()
    {
        return view('backend.user.admin.create');
    }

    public function createManager()
    {
        return view('backend.user.manager.create');
    }

    public function createLeader()
    {
        $provinsi = Wilayah::where('level', 1)->orderBy('nama', 'asc')->get();

        return view('backend.user.leader.create', [
            'provinsi' => $provinsi
        ]);
    }

    public function createGuide()
    {
        $provinsi = Wilayah::where('level', 1)->get();

        return view('backend.user.guide.create', [
            'provinsi' => $provinsi,
        ]);
    }

    public function userStore(UserRequest $request)
    {
        $data = $request->all();

        if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('storage/avatar');
            $avatar->move($avatarPath, $avatarName);
        } else {
            $avatarName = null;
        }

        User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $avatarName,
        ])->assignRole($data['role']);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function leaderStore(UserRequest $request)
    {
        $data = $request->all();

        if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('storage/avatar');
            $avatar->move($avatarPath, $avatarName);
        } else {
            $avatarName = null;
        }

        User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $avatarName,
        ])->assignRole($data['role']);

        $user = User::latest()->first();

        Fasilitator::create([
            'user_id' => $user->id,
            'wilayah_id' => $data['desa'],
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function editAdmin($id)
    {
        $user = User::findOrFail($id);

        return view('backend.user.admin.edit', [
            'user' => $user
        ]);
    }

    public function editManager($id)
    {
        $user = User::findOrFail($id);

        return view('backend.user.manager.edit', [
            'user' => $user
        ]);
    }

    public function editCustomer($id)
    {
        $user = User::with('customer')->findOrFail($id);

        return view('backend.user.customer.edit', [
            'user' => $user
        ]);
    }

    public function editLeader($id)
    {
        $user = User::with('fasilitator')->findOrFail($id);

        $kecamatanId = Wilayah::findOrFail($user->fasilitator->wilayah->induk);
        $desa = Wilayah::where('level', 4)->where('induk', $kecamatanId->id)->get();

        $kabupatenId = Wilayah::findOrFail($kecamatanId->induk);
        $kecamatan = Wilayah::where('level', 3)->where('induk', $kabupatenId->id)->get();

        $provinsiId = Wilayah::findOrFail($kabupatenId->induk);
        $kabupaten = Wilayah::where('level', 2)->where('induk', $provinsiId->id)->get();

        $provinsi = Wilayah::where('level', 1)->orderBy('nama', 'asc')->get();

        return view('backend.user.leader.edit', [
            'user' => $user,
            'desa' => $desa,
            'kecamatanId' => $kecamatanId,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'kabupatenId' => $kabupatenId,
            'provinsi' => $provinsi,
            'provinsiId' => $provinsiId,
        ]);
    }

    public function editGuide($id)
    {
        $user = User::with('fasilitator')->findOrFail($id);

        $kecamatanId = Wilayah::findOrFail($user->fasilitator->wilayah->induk);
        $desa = Wilayah::where('level', 4)->where('induk', $kecamatanId->id)->get();

        $kabupatenId = Wilayah::findOrFail($kecamatanId->induk);
        $kecamatan = Wilayah::where('level', 3)->where('induk', $kabupatenId->id)->get();

        $provinsiId = Wilayah::findOrFail($kabupatenId->induk);
        $kabupaten = Wilayah::where('level', 2)->where('induk', $provinsiId->id)->get();

        $provinsi = Wilayah::where('level', 1)->orderBy('nama', 'asc')->get();

        return view('backend.user.guide.edit', [
            'user' => $user,
            'desa' => $desa,
            'kecamatanId' => $kecamatanId,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'kabupatenId' => $kabupatenId,
            'provinsi' => $provinsi,
            'provinsiId' => $provinsiId,
        ]);
    }

    public function updateUser(UserRequest $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);

        if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('storage/avatar');
            $avatar->move($avatarPath, $avatarName);

            if ($user->avatar) {
                if (file_exists(public_path('storage/avatar/') . $user->avatar)) {
                    unlink(public_path('storage/avatar/') . $user->avatar);
                }
            }
        } else {
            $avatarName = $user->avatar;
        }

        $user->update([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'avatar' => $avatarName,
        ]);

        if ($request->has('password')) {
            $user->update([
                'password' => Hash::make($data['password']),
            ]);
        }

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui.');
    }

    public function updateCustomer(UserRequest $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);
        $customer = Customer::where('user_id', $id)->first();

        if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('storage/avatar');
            $avatar->move($avatarPath, $avatarName);

            if ($user->avatar) {
                if (file_exists(public_path('storage/avatar/') . $user->avatar)) {
                    unlink(public_path('storage/avatar/') . $user->avatar);
                }
            }
        } else {
            $avatarName = $user->avatar;
        }

        $user->update([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'avatar' => $avatarName,
        ]);

        if ($request->has('password')) {
            $user->update([
                'password' => Hash::make($data['password']),
            ]);
        }

        $customer->update([
            'nik' => $data['nik'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'no_passport' => $data['no_passport'],
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui.');
    }

    public function updateLeader(UserRequest $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);

        if (request()->has('avatar')) {
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('storage/avatar');
            $avatar->move($avatarPath, $avatarName);

            if ($user->avatar) {
                if (file_exists(public_path('storage/avatar/') . $user->avatar)) {
                    unlink(public_path('storage/avatar/') . $user->avatar);
                }
            }
        } else {
            $avatarName = $user->avatar;
        }

        $user->update([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'avatar' => $avatarName,
        ]);

        if ($request->has('password')) {
            $user->update([
                'password' => Hash::make($data['password']),
            ]);
        }

        $fasilitator = Fasilitator::where('user_id', $id)->first();

        $fasilitator->update([
            'wilayah_id' => $data['desa'],
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->avatar) {
            if (file_exists(public_path('storage/avatar/') . $user->avatar)) {
                unlink(public_path('storage/avatar/') . $user->avatar);
            }
        }

        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
    }
}
