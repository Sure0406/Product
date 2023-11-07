<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products=product::get();
        return view('Product.product',['products'=>$products]);
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'product_price' => 'required|numeric',
        ]);
        $imageName = time() . "." . $request->product_image->extension();
        $request->product_image->move(public_path('product'), $imageName);
        $product = new Product; // Make sure the model name matches your Product model.
        $product->image = $imageName;
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->save();
    
        return back();
    }
    public function AddUser(){
         return view('product/register');
    }
}
