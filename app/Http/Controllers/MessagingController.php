<?php

namespace App\Http\Controllers;

use App\Models\Messaging;
use Illuminate\Http\Request;

class MessagingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => ['required'],
            'message' => ['required', 'min:3'],
        ]);


        $mssage = Messaging::create([
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->back()->with('success', 'Message sent.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
