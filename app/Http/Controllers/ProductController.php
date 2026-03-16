<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(){
        $products = Product::all();
        return view('products', ['products' => $products]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);
        return redirect('/products');
    }
    public function view($id){
        $product = Product::find($id);
        return view('show', ['product'=>$product]);
    }
    public function edit($id){
        $product = Product::find($id);
        return view('edit', ['product' => $product]);
    }
    public function update($id, Request $request){
        $product = Product::find($id);
        $product->update([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);
        return redirect('/products');
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();

        return redirect('/products');
    }
}
