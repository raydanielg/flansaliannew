<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('pages.apply');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'applying_for_level' => 'required|string',
            'parent_name' => 'required|string|max:255',
            'parent_phone' => 'required|string|max:20',
            'parent_email' => 'required|email|max:255|unique:users,email',
            'address' => 'required|string',
        ]);

        // Generate username (e.g., Ezra Daniel -> edaniel)
        $nameParts = array_filter(explode(' ', strtolower($validated['student_name'])));
        $nameParts = array_values($nameParts);
        $firstName = $nameParts[0] ?? '';
        $lastName = $nameParts[count($nameParts) - 1] ?? '';
        $username = substr($firstName, 0, 1) . $lastName;
        
        // Ensure username is unique
        $originalUsername = $username;
        $count = 1;
        while (User::where('name', $username)->exists()) {
            $username = $originalUsername . $count++;
        }

        // Create User account
        $user = User::create([
            'name' => $username,
            'email' => $validated['parent_email'],
            'password' => Hash::make('sfs@2026'),
        ]);

        // Create Application linked to user
        $application = Application::create([
            'user_id' => $user->id,
            'student_name' => $validated['student_name'],
            'date_of_birth' => $validated['date_of_birth'],
            'gender' => $validated['gender'],
            'applying_for_level' => $validated['applying_for_level'],
            'parent_name' => $validated['parent_name'],
            'parent_phone' => $validated['parent_phone'],
            'parent_email' => $validated['parent_email'],
            'address' => $validated['address'],
            'username' => $username,
            'status' => 'pending'
        ]);

        return redirect()->route('admission')->with([
            'success' => 'Maombi yako yamepokelewa kikamilifu!',
            'username' => $username,
            'password' => 'sfs@2026'
        ]);
    }
}
