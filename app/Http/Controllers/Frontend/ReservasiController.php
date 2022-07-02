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
        $user = Auth::user();
        $reservasi = Reservasi::with('customer')->where('customer_id', $user->id)->get();
        $destinasi = Destinasi::with('reservasi')->get();
        return view('frontend.reservasi.index', [
            'reservasi' => $reservasi,
            'destinasi' => $destinasi
        ]);
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

    public function show()
    {
        return view('frontend.reservasi.success');
    }

    public function store(ReservasiRequest $request)
    {
       $data = $request->all();

       $mulai = strtotime($data['tgl_mulai']);
       $akhir = strtotime($data['tgl_akhir']);
    //    dd($data);
        $jarak = $akhir - $mulai;
        $durasi = ($jarak / 60 / 60 / 24) + 1;

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

        // if(count(max($hotel,$kendaraan)) === count($hotel)){
        //     for ($i=0; $i < count($hotel); $i++) {
            
        //         $data = [
        //             'reservasi_id' => $reservasi->id,
        //             'hotel_id' =>$hotel[$i],
        //         ];
        //         Destinasi::create($data);
        //     }
        //     $destinasi = Destinasi::latest()->first();

        //     for ($i=0; $i < count($kendaraan); $i++) {
            
        //         $data = [
        //             'kendaraan_id' =>$kendaraan[$i],
        //         ];
        //         $destinasi->fill($data)->save();
        //         $reservasi->update(['status' => 'Menunggu Konfirmasi']);
        //     }
        // } elseif (count(max($hotel,$kendaraan)) === count($kendaraan)){
        //     for ($i=0; $i < count($kendaraan); $i++) {
            
        //         $data = [
        //             'reservasi_id' => $reservasi->id,
        //             'kendaraan_id' =>$kendaraan[$i],
        //         ];
        //         Destinasi::create($data);
        //     }
        //     $destinasi = Destinasi::latest()->first();

        //     for ($i=0; $i < count($hotel); $i++) {
            
        //         $data = [
        //             'hotel_id' =>$hotel[$i],
        //         ];
        //         $destinasi->fill($data)->save();
        //         $reservasi->update(['status' => 'Menunggu Konfirmasi']);
        //     }
        // } else {
            for ($i=0; $i < count($hotel); $i++) {
                $data = [
                    'reservasi_id' => $reservasi->id,
                    'hotel_id' =>$hotel[$i],
                    'kendaraan_id' => $kendaraan[$i],
                ];
                Destinasi::create($data);
            }
            $reservasi->update(['status' => 'Menunggu Konfirmasi']);

        return to_route('reservasi.show');
    }

    public function pembayaran(Request $request, $id)
    {
        $reservasi = Reservasi::findorFail($id);
        $file = $request->file('bukti');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/bukti-pembayaran';
        $file->move($tujuan_upload,$nama_file);

        $reservasi->update([
            'bukti_pembayaran' => $nama_file,
            'status' => 'Menunggu Konfirmasi Pembayaran'
        ]);

        return redirect()->back();
    }
}
