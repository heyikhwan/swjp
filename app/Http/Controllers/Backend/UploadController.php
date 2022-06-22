<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\TemporaryFile;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $images = $request->file('image');

            foreach ($images as $image) {
                $filename = time() . '-' . $image->getClientOriginalName();
                $folder = uniqid() . '-' . now()->timestamp;
                $image->move(public_path('storage/tmp/' . $folder), $filename);

                TemporaryFile::create([
                    'folder' => $folder,
                    'filename' => $filename
                ]);

                return $folder;
            }

            return '';
        }
    }
}
