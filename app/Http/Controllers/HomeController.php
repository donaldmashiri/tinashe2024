<?php

namespace App\Http\Controllers;

use App\Models\ContentUpload;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {
        $contents = ContentUpload::orderBy('id', 'desc')->get();
        return view('home', compact('contents'));
    }

    public function content()
    {
        $contents = ContentUpload::orderBy('id', 'desc')->get();
        return view('content', compact('contents'));
    }

    public function show(string $id)
    {
        $content = ContentUpload::findorfail($id);
        $feedbacks = Feedback::where('content_upload_id', $id)->get();
        return view('show', compact('content', 'feedbacks'));
    }

}
