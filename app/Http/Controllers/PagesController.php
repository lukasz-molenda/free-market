<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function indexNews()
    {
      return view('news');
    }

    public function indexEncyclopedia()
    {
      return view('encyclopedia');
    }

    public function indexBlogs()
    {
      return view('blogs');
    }
}