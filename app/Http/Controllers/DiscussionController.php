<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discussions = Discussion::orderBy('id', 'desc')->get();
        return view('discussions.index', compact('discussions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('discussions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'topic' => 'required',
        ]);

        $discussion = Discussion::create([
            'topic' => $request->topic,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('discussions.index')->with('success', 'Content uploaded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Discussion $discussion)
    {
        $comments = Comment::where('discussion_id', $discussion->id)->orderBy('id', 'desc')->get();
        return view('discussions.show', compact('discussion', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discussion $discussion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discussion $discussion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discussion $discussion)
    {
        //
    }
}
