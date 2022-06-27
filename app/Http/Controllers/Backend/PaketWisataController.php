<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaketWisataRequest;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function index()
    {
        $paket_wisata =  PaketWisata::latest()->get();

        return view('backend.paket-wisata.index', [
            'paket_wisata' => $paket_wisata
        ]);
    }

    public function create()
    {
        return view('backend.paket-wisata.create');
    }

    public function store(PaketWisataRequest $request)
    {
        $data = $request->all();


        $harga = (int) filter_var($data['harga'], FILTER_SANITIZE_NUMBER_INT);

        if ($request->is_popular) {
            $is_popular = 1;
        } else {
            $is_popular = 0;
        }

        PaketWisata::create([
            'nama' => $data['nama'],
            'harga' => $harga,
            'body' => $data['body'],
            'is_popular' => $is_popular
        ]);

        return redirect()->route('paket-wisata.index')->with('success', 'Paket Wisata berhasil ditambahkan');
    }

    public function edit($id)
    {
        $paket_wisata = PaketWisata::findOrFail($id);

        return view('backend.paket-wisata.edit', [
            'paket_wisata' => $paket_wisata
        ]);
    }

    public function update(PaketWisataRequest $request, $id)
    {
        $data = $request->all();
        $paket_wisata = PaketWisata::findOrFail($id);

        $harga = (int) filter_var($data['harga'], FILTER_SANITIZE_NUMBER_INT);

        if ($request->is_popular) {
            $is_popular = 1;
        } else {
            $is_popular = 0;
        }

        $paket_wisata->update([
            'nama' => $data['nama'],
            'harga' => $harga,
            'body' => $data['body'],
            'is_popular' => $is_popular
        ]);

        return redirect()->route('paket-wisata.index')->with('success', 'Paket Wisata berhasil diperbarui');
    }

    public function destroy($id)
    {
        $paket_wisata = PaketWisata::findOrFail($id);

        $paket_wisata->delete();

        return redirect()->route('paket-wisata.index')->with('success', 'Paket Wisata berhasil dihapus');
    }
}
