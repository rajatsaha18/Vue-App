<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }
    public function about()
    {
        return view('about');
    }
    public function myWork()
    {
        return view('my-work');
    }
    public function findDeveloper()
    {
        return view('find-developer');
    }
    public function account()
    {
        return view('account');
    }
}
