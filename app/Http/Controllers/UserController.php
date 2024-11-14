<?php

namespace App\Http\Controllers;

use App\Models\Messaging;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Check if the authenticated user is an admin
        if (auth()->user()->user_type === 'admin') {
            // If the user is an admin, return all users
            $users = User::all();
        } else {
            // If not an admin, return users with the same company number
            $users = User::where('company_number', auth()->user()->company_number)->get();
        }

        // Return the view with the users data
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
            'name' => ['required', 'string', 'max:255', 'regex:/^[\p{L}0-9\s]+$/u'],
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
        $user = User::findOrFail($id);

        $messages = Messaging::where('receiver_id', $user->id)
        ->where('user_id', Auth::user()->id)
        ->get();

        return view('users.show', compact('user', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Validate the incoming request data
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[\p{L}0-9\s]+$/u'],
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id, // Ignore the current user
            'user_type' => 'required',
         // Password is optional for updates
            'expertise' => 'nullable|string|max:255',
            'skill_set' => 'nullable|string|max:255',
            'academic_level' => 'nullable|string|max:255',
            'regnum' => 'nullable|string|max:255',
            'programme' => 'nullable|string|max:255',
        ]);

        // Update the user instance with validated data
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->user_type = $validated['user_type'];
        $user->company_number = auth()->user()->company_number; // Optional if company number should stay the same

        // Hash the password only if it's provided


        // Update other fields
        $user->expertise = $validated['expertise'];
        $user->skill_set = $validated['skill_set'];
        $user->academic_level = $validated['academic_level'];
        $user->regnum = $validated['regnum'];
        $user->programme = $validated['programme'];

        // Save the updated user instance
        $user->save();

        // Redirect back with a success message
        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
