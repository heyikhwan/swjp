<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        return view('backend.kendaraan.index');
    }

    public function create()
    {
        return view('backend.kendaraan.create');
    }
}
