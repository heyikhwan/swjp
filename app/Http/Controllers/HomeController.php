<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PaketWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function home()
    {
        $paket = PaketWisata::get();
        $karyawan = User::role(['guide','leader'])->get();
        $jmlhGuide = User::role('guide')->count();
        $jmlhLeader = User::role('leader')->count();
        return view('frontend.index',[
            'paket' => $paket,
            'karyawan' => $karyawan,
            'jmlhGuide' => $jmlhGuide,
            'jmlhLeader' => $jmlhLeader,
        ]);
    }

    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }

    public function root()
    {
        return view('index');
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

}
