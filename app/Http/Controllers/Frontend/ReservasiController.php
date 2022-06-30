<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Hotel;
use App\Models\Destinasi;
use App\Models\Kendaraan;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DestinasiRequest;
use App\Http\Requests\ReservasiRequest;

class ReservasiController extends Controller
{

    public function index()
    {
        return view('frontend.reservasi.index');
    }

    public function create()
    {
        $guide = User::role('guide')->get();
        $leader = User::role('leader')->get();
        return view('frontend.reservasi.create' ,[
            'guide' => $guide,
            'leader' => $leader
        ]);
    }

    public function createDestinasi()
    {
        $hotel = Hotel::get();
        $kendaraan = Kendaraan::get();
        return view('frontend.reservasi.create-destinasi' ,[
            'hotel' => $hotel,
            'kendaraan' => $kendaraan
        ]);
    }

    public function store(ReservasiRequest $request)
    {
       $data = $request->all();

    //    dd($data);

       Reservasi::create([
        'customer_id' => Auth::id(),
        'tgl_mulai' => $data['tgl_mulai'],
        'tgl_akhir' => $data['tgl_akhir'],
        'leader_id' => $data['leader'],
        'guide_id' => $data['guide'],
        'judul' => $data['name'],
        'jenis_perjalanan' => $data['jenis'],
        'keberangkatan' => $data['keberangkatan'],
        'status' => 'Invalid Data'
       ]);

        return to_route('reservasi.createDestinasi');
    }

    public function storeDestinasi(DestinasiRequest $request)
    {
        // $destinasi = $request->destinasi;
        $hotel = $request->hotel;
        $kendaraan = $request->kendaraan;
        $reservasi = Reservasi::latest()->first();

        if(count(max($hotel,$kendaraan)) === count($hotel)){
            for ($i=0; $i < count($hotel); $i++) {
            
                $data = [
                    'reservasi_id' => $reservasi->id,
                    'hotel_id' =>$hotel[$i],
                ];
                Destinasi::create($data);
            }
            $destinasi = Destinasi::latest()->first();

            for ($i=0; $i < count($kendaraan); $i++) {
            
                $data = [
                    'kendaraan_id' =>$kendaraan[$i],
                ];
                $destinasi->fill($data)->save();
                $reservasi->update(['status' => 'Menunggu Konfirmasi']);
            }
        } elseif (count(max($hotel,$kendaraan)) === count($kendaraan)){
            for ($i=0; $i < count($kendaraan); $i++) {
            
                $data = [
                    'reservasi_id' => $reservasi->id,
                    'kendaraan_id' =>$kendaraan[$i],
                ];
                Destinasi::create($data);
            }
            $destinasi = Destinasi::latest()->first();

            for ($i=0; $i < count($hotel); $i++) {
            
                $data = [
                    'hotel_id' =>$hotel[$i],
                ];
                $destinasi->fill($data)->save();
                $reservasi->update(['status' => 'Menunggu Konfirmasi']);
            }
        } else {
            for ($i=0; $i < count(max($hotel,$kendaraan)); $i++) {
                $data = [
                    'reservasi_id' => $reservasi->id,
                    'hotel_id' =>$hotel[$i],
                    'kendaraan_id' => $kendaraan[$i],
                ];
                Destinasi::create($data);
                $reservasi->update(['status' => 'Menunggu Konfirmasi']);
            }
        }

        return to_route('reservasi.create');
    }
}