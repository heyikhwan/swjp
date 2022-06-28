<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{

    public function index()
    {
        return view('frontend.reservasi.index');
    }

    public function create()
    {
        return view('frontend.reservasi.create');
    }
}
