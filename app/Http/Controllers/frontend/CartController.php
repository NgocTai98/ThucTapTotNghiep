<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function getCart(){
        return view('frontend.cart.cart');
    }
    function getCheckout(){
        return view('frontend.cart.checkout');
    }
}
