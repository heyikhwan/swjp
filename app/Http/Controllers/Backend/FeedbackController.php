<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Fasilitator;
use App\Models\User;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function leader()
    {
        $user = User::with('fasilitator')->role('leader')->latest()->get();

        return view('backend.feedback.leader', [
            'user' => $user
        ]);
    }
}
