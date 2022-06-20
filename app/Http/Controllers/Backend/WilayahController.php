<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index()
    {
        $wilayah = Wilayah::paginate(10);

        return view('backend.wilayah.index' ,[
            'wilayah' => $wilayah
        ]);
    }
}
