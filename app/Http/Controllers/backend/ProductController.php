<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct(){
        $data['product']=Product::paginate(3);
        return view('backend.product.listproduct',$data);
    }
    public function getAddProduct(){
        return view('backend.product.addproduct');
    }
    public function getEditProduct(){
        return view('backend.product.editproduct');
    }
}
