<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function riwayat()
    {
        return view('backend.riwayat-reservasi.index');
    }

    public function data()
    {
        return view('backend.data-reservasi.index');
    }
}
