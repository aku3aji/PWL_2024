<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index(){
        return view('product.index') ;
    }

    public function foodBeverage(){
        return view('product.food-beverage') ;
    }
    
    public function beautyHeaIth(){
        return view('product.beauty-health') ;
    }
    
    public function homecare(){
        return view('product.home-care') ;
    }
    
    public function babyKid(){
        return view('product.baby-kid');
    }
}