<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
   // {
     //   $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function matches()
    {
        return view('pages.matches');
    }
    public function singleMatch()
    {
        return view('pages.single-match');
    }
    public function players()
    {
        return view('pages.players');
    }
    public function singlePlayer()
    {
        return view('pages.single-player');
    }
    public function media()
    {
        return view('pages.media');
    }
}
