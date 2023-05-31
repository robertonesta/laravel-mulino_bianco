<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function products(){
        $products= Product::all(); 
        return view('/products', compact('products'));
    }
    
}
