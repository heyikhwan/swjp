<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hotel;
use App\Models\Kendaraan;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservasiRequest;

class ReservasiController extends Controller
{

    public function index()
    {
        return view('frontend.reservasi.index');
    }

    public function create()
    {
        $hotel = Hotel::get();
        $kendaraan = Kendaraan::get();
        return view('frontend.reservasi.create' ,[
            'hotel' => $hotel,
            'kendaraan' => $kendaraan
        ]);
    }

    public function store(ReservasiRequest $request)
    {
        $tgl_mulai = $request->tgl_mulai;
        $tgl_akhir = $request->tgl_akhir;
        $hotel = $request->hotel;
        $kendaraan = $request->kendaraan;

        dd($hotel);

        $tanggal = [
            'tgl_mulai' => $tgl_mulai,
            'tgl_akhir' => $tgl_akhir,
        ];

        foreach ($request->id as $i) {

            Reservasi::fill([
                'hotel_id' => $hotel[$i],
                'kendaraan_id' => $kendaraan[$i]
            ])->save();
        }

        //   for ($i=0; $i < count($hotel); $i++) {
        //     $dataHotel = [
        //         'hotel_id' => $hotel[$i],
        //     ];
        // }
        //     for ($i=0; $i < count($kendaraan); $i++) {
        //     $dataKendaraan = [
        //         'kendaraan_id' => $kendaraan[$i],
        //     ];

            // foreach ($request->id as $i => $id) {

            //     $data = Barang::findOrFail($id); // validations the product id
            //     // dd($request->status[$i]);
            //     $data->fill([
            //         'status' => $request->status[$i],
            //         'keterangan' => $request->keterangan[$i]
            //     ])->save();
            // }

        return view('frontend.reservasi.create');
    }
}
