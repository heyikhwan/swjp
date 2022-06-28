<?php

namespace App\Http\Controllers\Backend;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\WilayahRequest;

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

            // $button = '<button type="button" class="btn btn-soft-secondary waves-effect waves-light me-2" onclick="hai(' . $data->id . ')" data-bs-toggle="modal" data-bs-target="#detail-'.$data->id.'"><i class="fas fa-eye"></i></button>';
            if($data->level != 4) {
            $button = '<a href="'.route('wilayah.tambah', $data->id) . '" class="btn btn-soft-secondary waves-effect waves-light me-2"><span class="icon"><i class="fas fa-plus"></i></span></a>';
        
            $button .= '<a href="' . route('wilayah.edit', $data->id) . '" class="btn btn-soft-warning waves-effect waves-light me-2"><span class="icon"><i class="fas fa-edit"></i></span></a>';
            } else {
            $button = '<a href="' . route('wilayah.edit', $data->id) . '" class="btn btn-soft-warning waves-effect waves-light ms-5 me-2"><span class="icon"><i class="fas fa-edit"></i></span></a>';
            }
            $button .= '<button type="submit" class="btn btn-soft-danger waves-effect waves-light" onclick="swal(' . $data->id . ' )"><span class="icon"><i class="fas fa-trash"></i></span><form id="delete-' . $data->id . '" action="' . route('wilayah.destroy', $data->id) . '" method="POST"><input type="hidden" name="_token" value="' . csrf_token() . '" /><input type="hidden" name="_method" value="delete" /></form></button>';

            return $button;
        })
        ->addColumn('level', function ($data) {
            return ($data->level == 1) ? "Provinsi" : (($data->level == 2) ? "Kabupaten/Kota" : (($data->level == 3) ? "Kecamatan" : "Desa"));
        })
        ->orderColumn('level', 'level $1')
        ->rawColumns(['aksi', 'level'])
        ->make(true);
    }

    public function create()
    {
        return view('backend.wilayah.create');
    }

    public function tambah($id)
    {
        $wilayah = Wilayah::findOrFail($id);

        return view('backend.wilayah.tambah', [
            'wilayah' => $wilayah
        ]);
    }

    public function store(WilayahRequest $request)
    {
        $data = $request->all();

        Wilayah::create([
            'nama' => $data['name'],
            'level' => $data['level'],
            'induk' => $data['induk'],
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

    public function update(WilayahRequest $request, $id)
    {
        $data = $request->all();

        $wilayah = Wilayah::findOrFail($id);

        $wilayah->update([
            'nama' => $data['name'],
            'level' => $data['level'],
            'induk' => $data['induk'],
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
