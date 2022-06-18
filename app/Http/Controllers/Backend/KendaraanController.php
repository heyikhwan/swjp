<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\KendaraanRequest;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::latest()->get();

        return view('backend.kendaraan.index', [
            'kendaraan' => $kendaraan
        ]);
    }

    public function create()
    {
        return view('backend.kendaraan.create');
    }

    public function store(KendaraanRequest $request)
    {
        $data = $request->all();

        Kendaraan::create([
            'nama' => $data['nama'],
            'jenis_transport' => $data['jenis_transport'],
            'pemilik' => $data['pemilik'],
        ]);

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        return view('backend.kendaraan.edit', [
            'kendaraan' => $kendaraan
        ]);
    }

    public function update(KendaraanRequest $request, $id)
    {
        $data = $request->all();
        $kendaraan = Kendaraan::findOrFail($id);

        $kendaraan->update([
            'nama' => $data['nama'],
            'jenis_transport' => $data['jenis_transport'],
            'pemilik' => $data['pemilik'],
        ]);

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus');
    }

    public function create()
    {
        return view('backend.kendaraan.create');
    }
}
