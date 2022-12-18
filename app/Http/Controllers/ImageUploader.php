<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploader extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function upload(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('uploads/images', $fileName, 'public');
        return response()->json(['location' => "/storage/$path"]);
    }
}
