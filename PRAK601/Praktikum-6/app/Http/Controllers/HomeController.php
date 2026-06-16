<?php

namespace App\Http\Controllers;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $home = new Home();
        $name = $home->name();
        $NIM = $home->NIM();

        return view('home', compact('name', 'NIM'));    
   }
}