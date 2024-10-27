<?php

namespace App\Http\Controllers;

use App\Models\ContentUpload;
use Illuminate\Http\Request;

class ContentUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = ContentUpload::all();
        return view('content-uploads.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content-uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return back()->with('error', 'insert all fields');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContentUpload $contentUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContentUpload $contentUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContentUpload $contentUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentUpload $contentUpload)
    {
        //
    }
}
