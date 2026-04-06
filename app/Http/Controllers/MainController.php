<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Promotion;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $about = About::latest()->first();
        $promotions = Promotion::latest()->get();
        return view('home', compact('about', 'promotions'));
    }
}
