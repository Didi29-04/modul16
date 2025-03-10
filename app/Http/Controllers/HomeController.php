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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     $pageTitle = 'home';
    //     return view('home', ['pageTitle' => $pageTitle]);
    // }
    public function index()
        {
            $pageTitle = 'Home';
            return view('home', compact('pageTitle'));
        }   

    // public function login()
    // {
    //     return redirect()->route('login');
    // }
}
