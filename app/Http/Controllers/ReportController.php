<?php

namespace App\Http\Controllers;

use App\Models\ContentUpload;
use App\Models\Discussion;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contentCount = ContentUpload::count();
        $feedbackCount = Feedback::count();
        $discussionCount = Discussion::count();


        $users = User::all();
        $userCount = $users->count();

        // Count lecturers and students
        $lecturerCount = $users->where('user_type', 'lecturer')->count();
        $studentCount = $users->where('user_type', 'student')->count();



        return view('reports.index', compact('users', 'userCount', 'lecturerCount', 'studentCount', 'contentCount', 'feedbackCount', 'discussionCount'));
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
        //
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
