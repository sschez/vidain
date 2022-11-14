<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function menu()
    {
            $data1 = "Focus";
            $data2 = "Menu";
            return view('home.menu')->with("title", $data1);
        
        
    }
}
