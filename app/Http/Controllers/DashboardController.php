<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * to apply middleware for all of the methods here
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }
    public function index()
    {
        // dd(auth()->user()->posts);
        return view('dashboard');
    }
}
