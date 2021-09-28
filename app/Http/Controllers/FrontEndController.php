<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function team(){
        return view('frontend.pages.team');
    }

    public function shop(Request $request){
        return view('frontend.pages.shop');
    }
    public function singleProduct(Request $request)
    {
        $product=Product::where('id',$request->id)->first();
        return view('frontend.pages.singleProduct',compact('product'));
    }
    public function products()
    {
        $products = Product::latest()->paginate(20);
        return view('frontend.pages.products',compact('products'));
    }

    public function thankYou(){
        return view('frontend.pages.thankYou');
    }

}
