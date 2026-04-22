<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(){
        $products = Product::paginate(3);
        return view('products', ['products' => $products]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'price' => 'required'
        ]);
        Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);
        return redirect()->route('index');
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

        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'price' => 'required'
        ]);

        $product->update([
            'name' => $request['name'],
            'price' => $request['price'],
        ]);

        return redirect()->route('index');
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('index');
    }
    public function updateStatus($id, Request $request){
        $validate = $request->validate([
            'status' => 'required|in: "In stock", "Out of stock"'
        ]);
        $product = Product::find($id);
        $product->update([
            'status' => $request['status'],
        ]);
        return to_route('index');
    }
}
