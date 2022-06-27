<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use App\Models\Hotel;
use App\Models\HotelGallery;
use App\Models\Wilayah;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotel = Hotel::with(['galleries', 'wilayah'])->latest()->get();
        $galleries = HotelGallery::all();

        return view('backend.hotel.index', [
            'hotel' => $hotel,
            'galleries' => $galleries,
        ]);
    }

    public function create()
    {
        $provinsi = Wilayah::where('level', 1)->orderBy('nama', 'asc')->get();
        $kota = Wilayah::where('level', 2)->get();
        $kecamatan = Wilayah::where('level', 3)->get();
        $desa = Wilayah::where('level', 4)->get();

        return view('backend.hotel.create', [
            'provinsi' => $provinsi,
            'kota' => $kota,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
        ]);
    }

    public function store(HotelRequest $request)
    {
        $data = $request->all();

        Hotel::create([
            'wilayah_id' => $data['desa'],
            'name' => $data['name'],
            'bintang' => $data['bintang'],
        ]);

        $hotel = Hotel::latest()->first();

        if (!is_null($request->image)) {
            foreach ($request->image as $img) {
                $temporaryFile = TemporaryFile::where('folder', $img)->first();
    
                HotelGallery::create([
                    'hotel_id' => $hotel->id,
                    'image' => $temporaryFile->filename
                ]);

                \File::move(public_path('storage/tmp/' . $img . '/' . $temporaryFile->filename, 'storage/hotel/'), public_path('storage/hotel/' . $temporaryFile->filename));

                \File::delete(public_path('storage/tmp/' . $img));

                $temporaryFile->delete();
            }
        }

        return redirect()->route('hotel.index')->with('success', 'Hotel berhasil ditambahkan');
    }


    public function edit($id)
    {
        $hotel = Hotel::with(['galleries', 'wilayah'])->findOrFail($id);

        $kecamatanId = Wilayah::findOrFail($hotel->wilayah->induk);
        $desa = Wilayah::where('level', 4)->where('induk', $kecamatanId->id)->get();

        $kabupatenId = Wilayah::findOrFail($kecamatanId->induk);
        $kecamatan = Wilayah::where('level', 3)->where('induk', $kabupatenId->id)->get();

        $provinsiId = Wilayah::findOrFail($kabupatenId->induk);
        $kabupaten = Wilayah::where('level', 2)->where('induk', $provinsiId->id)->get();

        $provinsi = Wilayah::where('level', 1)->orderBy('nama', 'asc')->get();

        return view('backend.hotel.edit', [
            'hotel' => $hotel,
            'desa' => $desa,
            'kecamatanId' => $kecamatanId,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'kabupatenId' => $kabupatenId,
            'provinsi' => $provinsi,
            'provinsiId' => $provinsiId,
        ]);
    }

    public function imgDestroy($id)
    {
        $item = HotelGallery::findOrFail($id);

        if(file_exists(public_path('storage/hotel/') . $item->image)) {
            unlink(public_path('storage/hotel/') . $item->image);
        }

        $item->delete();

        return response()->json(['success' => 'image has been deleted']);
    }


    public function update(HotelRequest $request, $id)
    {
        $data = $request->all();
        $hotel = Hotel::findOrFail($id);

        $hotel->update([
            'name' => $data['name'],
            'wilayah_id' => $data['desa'],
            'bintang' => $data['bintang'],
        ]);

        if (!is_null($request->image)) {
            foreach ($request->image as $img) {
                $temporaryFile = TemporaryFile::where('folder', $img)->first();

                HotelGallery::create([
                    'hotel_id' => $hotel->id,
                    'image' => $temporaryFile->filename
                ]);

                \File::move(public_path('storage/tmp/' . $img . '/' . $temporaryFile->filename, 'storage/hotel/'), public_path('storage/hotel/' . $temporaryFile->filename));

                \File::delete(public_path('storage/tmp/' . $img));

                $temporaryFile->delete();
            }
        }

        return redirect()->route('hotel.index')->with('success', 'Hotel berhasil diperbarui');
    }

    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);

        $galleries = HotelGallery::where('hotel_id', $hotel->id)->get();

        foreach ($galleries as $gallery) {
            if ($gallery->image) {
                if(file_exists(public_path('storage/hotel/') . $gallery->image)) {
                    unlink(public_path('storage/hotel/') . $gallery->image);
                }
            }
        }

        $hotel->delete();

        return redirect()->route('hotel.index')->with('success', 'Hotel berhasil dihapus');
    }
}
