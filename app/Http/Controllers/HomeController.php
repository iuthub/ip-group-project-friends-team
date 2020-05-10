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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function book()
    {
        return view('booking.book');
    }

    public function book1()
    {
        return view('booking.book1');
    }

    public function book2()
    {
        return view('booking.book2');
    }

    public function about(){
        return view('about.about');
    }
}
