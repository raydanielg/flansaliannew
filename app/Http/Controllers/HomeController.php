<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        if ($user && $user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }

        $applications = $user ? \App\Models\Application::where('user_id', $user->id)->get() : collect();
        return view('home', compact('applications'));
    }

    public function applications()
    {
        $user = auth()->user();
        $applications = \App\Models\Application::where('user_id', $user->id)->get();
        return view('portal.applications', compact('applications'));
    }

    public function results()
    {
        return view('portal.results');
    }

    public function behaviour()
    {
        return view('portal.behaviour');
    }

    public function profile()
    {
        return view('portal.profile');
    }
}
