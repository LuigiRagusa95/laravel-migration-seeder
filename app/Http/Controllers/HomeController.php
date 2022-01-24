<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $packages = TravelPackage::all();
        return view('home', compact('packages'));
    }
}
