<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function upload(Request $request)
    {
        if($request->isMethod('GET')){
            var_dump($_FILES);

        }
        return view('upload.upload');
    }
}
