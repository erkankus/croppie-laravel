<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('home');
    }

    public function postIndex(Request $request)
    {
        dd($request->file('file_photo'));

        $data = $request->get('image');

        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);
        $imageName = time() . '.png';

        file_put_contents('images/' . $imageName, $data);
    }
}