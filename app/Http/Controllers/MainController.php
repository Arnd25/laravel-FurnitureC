<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advantage;
use App\Models\Product;
use App\Models\Review;
use App\Models\Promotion;
use App\Models\Contact;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    public function home() { 
        $about = About::latest()->first();
        $promotions = Promotion::latest()->get();
        $products = Product::latest()->take(8)->get();
        $advantages = Advantage::latest()->take(8)->get();
        $reviews = Review::latest()->take(8)->get();
        $contact = Contact::latest()->first(); 
        $feedback = Feedback::latest()->get();
        return view('home', compact('about', 'promotions', 'products', 'advantages','reviews', 'contact', 'feedback'));
    }
}
