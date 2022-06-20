<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        return view('backend.hotel.index');
    }

    public function create()
    {
        return view('backend.hotel.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'wilayah' => 'required|string',
            'bintang' => 'required|string',
            'foto' => 'required',
        ]);

        if (request()->has('foto')) {
            $foto = request()->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $fotoPath = public_path('storage/foto');
            $foto->move($fotoPath, $fotoName);
        } else {
            $fotoName = null;
        }

        $wilayah = Wilayah::where('id', $validatedData['wilayah'])->first();
        dd($wilayah->id);

        Hotel::create([
            'name' => $validatedData['name'],
            'wilayah_id' => $wilayah->id,
            'bintang' => $validatedData['bintang'],
            'foto' => $fotoName,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }
}
