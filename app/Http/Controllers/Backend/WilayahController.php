<?php

namespace App\Http\Controllers\Backend;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class WilayahController extends Controller
{
    public function index()
    {
        $wilayah = Wilayah::paginate(10);

        return view('backend.wilayah.index' ,[
            'wilayah' => $wilayah
        ]);
    }

    public function data()
    {
        $data = Wilayah::limit(10);

        return DataTables::of($data)
        ->addColumn('aksi', function ($data) {
            $button = '<a href="' . route('wilayah.edit', $data->id) . '" class="btn btn-soft-warning waves-effect waves-light"><span class="icon"><i class="fas fa-edit"></i></span></a>';

            $button .= '<button type="submit" class="btn btn-soft-danger waves-effect waves-light" onclick="swal(' . $data->id . ' )"><span class="icon"><i class="fas fa-trash"></i></span><form id="delete-' . $data->id . '" action="' . route('wilayah.destroy', $data->id) . '" method="POST"><input type="hidden" name="_token" value="' . csrf_token() . '" /><input type="hidden" name="_method" value="delete" /></form></button>';

            return $button;
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function create()
    {
        return view('backend.wilayah.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
            'induk' => '',
        ]);

        Wilayah::create([
            'nama' => $validatedData['name'],
            'level' => $validatedData['level'],
            'induk' => $validatedData['induk'],
        ]);

        return redirect()->route('wilayah.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $wilayah = Wilayah::findOrFail($id);

        return view('backend.wilayah.edit', [
            'wilayah' => $wilayah
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
            'induk' => '',
        ]);

        $wilayah = Wilayah::findOrFail($id);

        $wilayah->update([
            'nama' => $validatedData['name'],
            'level' => $validatedData['level'],
            'induk' => $validatedData['induk'],
        ]);


        return redirect()->route('wilayah.index')->with('success', 'Data user berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $wilayah = Wilayah::findOrFail($id);

        $wilayah->delete();

        return redirect()->route('wilayah.index')->with('success', 'User berhasil dihapus.');
    }

}
