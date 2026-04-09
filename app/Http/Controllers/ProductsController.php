<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
        public function index(){
        $products=Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(){

        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'image'=>'nullable','image','mimes:jpeg, png, jpg, gif','max:20048',
        ]);


        if($request->hasFile('image')){
            $validated['image']=$request->file('image')->store('products', 'public');
        }

        Product::create($validated);

        return redirect()->route('products.index')
        ->with('success', 'Продукт успешно создан');
    }

    public function show(Product $product){
        return view('products.show', compact('product'));
    }


    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }

    public function update(Product $product, Request $request){
        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'price'=>'required|numeric',
            'image'=>'nullable','image','mimes:jpeg, png, jpg, gif','max:20048',
            
        ]);

        if($request->hasFile('image')){
            $validated['image']= $request->file('image')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Продукт успешно обновлен!');
    }

    public function destroy(Product $product){
        
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Продукт успешно удален!');
    }
}
