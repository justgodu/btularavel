<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class ProductsController extends Controller
{

    public function __construct(){
        $this->middleware("CheckIfCanProduct");
    }
    public function index(){
        $products = Products::get();
        return view('products.index',['products'=>$products]);
        // return Pr oducts::get();
    }

    public function add(){
        return  view("products.add");
    }

    public function store(Request $request){
        Products::create(["title"=> $request->input("title"),
        "text"=> $request->input("some-text"),
        "short_description"=> $request->input("short-description")
        ]);
    }
}
