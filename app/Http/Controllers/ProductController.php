<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect('/');
    }

    public function show($id) {
        $product = Product::find($id);

        return view('products.show', compact('product'));
    }

    public function edit($id) {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update($id, Request $request) {
        $product = Product::find($id);
        
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect('/show/' . $id);
    }

    public function destroy($id) {
        $product = Product::find($id);

        $product->delete();

        return redirect('/');
    }
}
