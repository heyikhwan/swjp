<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\HotelGallery;
use App\Models\Wilayah;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotel = Hotel::with('galleries')->latest()->get();
        $galleries = HotelGallery::all();

        return view('backend.hotel.index', [
            'hotel' => $hotel,
            'galleries' => $galleries,
        ]);
    }

    public function create()
    {
        $provinsi = Wilayah::where('level', 1)->get();

        return view('backend.hotel.create', [
            'provinsi' => $provinsi
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'wilayah' => 'required|string',
            'bintang' => 'required|string',
        ]);

        $wilayah = Wilayah::where('id', $validatedData['wilayah'])->first();

        Hotel::create([
            'name' => $validatedData['name'],
            'wilayah_id' => $wilayah->id,
            'bintang' => $validatedData['bintang'],
        ]);

        $hotel = Hotel::latest()->first();

        if (!is_null($request->image[0])) {
            foreach ($request->image as $img) {
                $temporaryFile = TemporaryFile::where('folder', $img)->first();
    
                // dd($temporaryFile);
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
        $hotel = Hotel::with('galleries')->findOrFail($id);

        return view('backend.hotel.edit', [
            'hotel' => $hotel,
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


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'wilayah' => 'required|string',
            'bintang' => 'required|string',
            // 'foto' => 'required',
        ]);
        $hotel = Hotel::findOrFail($id);
        $wilayah = Wilayah::where('id', $validatedData['wilayah'])->first();

        $hotel->update([
            'name' => $validatedData['name'],
            'image' => 'nullable',
            'wilayah_id' => $wilayah->id,
            'bintang' => $validatedData['bintang'],
        ]);

        if (!is_null($request->image[0])) {
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
