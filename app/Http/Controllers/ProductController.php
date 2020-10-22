<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function getProducts(){
        $products = Product::all();
        return view('welcome' , compact("products"));
    }

    public function productEdit($id) {
        $product = Product::findOrFail($id);
        return view('productEdit', compact('product'));
    }

    public function productUpdate(ProductRequest $request, $id) {
        $validatedData = $request -> validated();
        $product = Product::findOrFail($id);
        $product -> update($validatedData);
        return redirect() -> route('products');
    }

    public function productDelete($id) {
        $product = Product::findOrFail($id);
        $product -> delete();

        return redirect() -> route('products');
    }
}
