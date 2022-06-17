<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        return view('backend.hotel.index');
    }

    public function create()
    {
        return view('backend.hotel.create');
    }
}
