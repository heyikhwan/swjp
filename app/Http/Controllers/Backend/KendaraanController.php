<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\KendaraanRequest;
use App\Models\Kendaraan;
use App\Models\KendaraanGallery;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::with('galleries')->latest()->get();
        $galleries = KendaraanGallery::all();

        return view('backend.kendaraan.index', [
            'kendaraan' => $kendaraan,
            'galleries' => $galleries,
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

        $kendaraan = Kendaraan::latest()->first();

        if (!is_null($request->image[0])) {
            foreach ($request->image as $img) {
                $temporaryFile = TemporaryFile::where('folder', $img)->first();
    
                KendaraanGallery::create([
                    'kendaraan_id' => $kendaraan->id,
                    'image' => $temporaryFile->filename
                ]);
    
                \File::move(public_path('storage/tmp/' . $img . '/' . $temporaryFile->filename, 'storage/kendaraan/'), public_path('storage/kendaraan/' . $temporaryFile->filename));
    
                \File::delete(public_path('storage/tmp/' . $img));
    
                $temporaryFile->delete();
            }
        }

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::with('galleries')->findOrFail($id);

        return view('backend.kendaraan.edit', [
            'kendaraan' => $kendaraan,
        ]);
    }

    public function imgDestroy($id)
    {
        $item = KendaraanGallery::findOrFail($id);

        if(file_exists(public_path('storage/kendaraan/') . $item->image)) {
            unlink(public_path('storage/kendaraan/') . $item->image);
        }

        $item->delete();

        return response()->json(['success' => 'image has been deleted']);
    }


    public function update(KendaraanRequest $request, $id)
    {
        $data = $request->all();
        $kendaraan = Kendaraan::findOrFail($id);

        $kendaraan->update([
            'nama' => $data['nama'],
            'image' => 'nullable',
            'jenis_transport' => $data['jenis_transport'],
            'pemilik' => $data['pemilik'],
        ]);

        if (!is_null($request->image[0])) {
            foreach ($request->image as $img) {
                $temporaryFile = TemporaryFile::where('folder', $img)->first();
    
                KendaraanGallery::create([
                    'kendaraan_id' => $kendaraan->id,
                    'image' => $temporaryFile->filename
                ]);

                \File::move(public_path('storage/tmp/' . $img . '/' . $temporaryFile->filename, 'storage/kendaraan/'), public_path('storage/kendaraan/' . $temporaryFile->filename));

                \File::delete(public_path('storage/tmp/' . $img));
    
                $temporaryFile->delete();
            }
        }

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $galleries = KendaraanGallery::where('kendaraan_id', $kendaraan->id)->get();

        foreach ($galleries as $gallery) {
            if ($gallery->image) {
                if(file_exists(public_path('storage/kendaraan/') . $gallery->image)) {
                    unlink(public_path('storage/kendaraan/') . $gallery->image);
                }
            }
        }

        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus');
    }
}
