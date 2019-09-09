<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('home');
    }

    public function postIndex(Request $request)
    {
        $fileData = $request->get('profile_photo');

        list($type, $fileData) = explode(';', $fileData);
        $extension = explode('/', $type)[1];
        list(, $fileData) = explode(',', $fileData);
        $fileData = base64_decode($fileData);

        $imageName = 'images/' .time() . '.' . $extension;

        file_put_contents($imageName, $fileData);

        echo $imageName;
    }
}