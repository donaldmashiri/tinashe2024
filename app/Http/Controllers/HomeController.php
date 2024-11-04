<?php

namespace App\Http\Controllers;

use App\Models\ContentUpload;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {
        $contents = ContentUpload::orderBy('id', 'desc')->get();
        return view('home', compact('contents'));
    }

}
