<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'user_type' => 'required|string|in:lecturer,student',
            'password' => 'required|string|min:8', // Assuming you have a password confirmation field
            'expertise' => 'nullable|string|max:255',
            'skill_set' => 'nullable|string|max:255',
            'academic_level' => 'nullable|string|max:255',
            'regnum' => 'nullable|string|max:255',
            'programme' => 'nullable|string|max:255',
        ]);

        // Create a new user instance and save it to the database
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->user_type = $validated['user_type'];
        $user->company_number = auth()->user()->company_number;
        $user->password = Hash::make($validated['password']); // Hash the password for security
        $user->expertise = $validated['expertise'];
        $user->skill_set = $validated['skill_set'];
        $user->academic_level = $validated['academic_level'];
        $user->regnum = $validated['regnum'];
        $user->programme = $validated['programme'];
        $user->save();

        // Redirect back with a success message
        return redirect()->route('users.index')->with('success', 'User created successfully!');
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
