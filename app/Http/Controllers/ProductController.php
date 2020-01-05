<?php

namespace App\Http\Controllers;

use App\Product;
use App\Store;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $store = Store::all();
        $product = Product::all();
        return view('product.index',compact('store','product'));
    }

    public function create(){
        $store = Store::all();
        return view('product.create',compact('store'));
    }

    public function store(Request $request){

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->input('price');
        $product->toppings = $request->input('toppings');
        $product->store_id = $request->input('store_id');
        $product->save();
        return redirect()->route('product');

    }

    public function edit($id){
        $store = Store::all();
        $product = Product::findOrfail($id);
        return view('product.edit',compact('store','product'));
    }

    public function update(Request $request,$id){
        $product =Product::findOrfail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->toppings = $request->input('toppings');
        $product->store_id = $request->store_id;
        $product->save();
        return redirect()->route('product');
    }


    public function destroy($id){
        $product = Product::findOrfail($id);
        $product->delete();
        return redirect()->route('product');
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');
        if (!$keyword){
            return redirect()->route('product');
        }

        $product = Product::where('name','LIKE','%'.$keyword.'%')->get();
        return view('product.index',compact('product'));
    }
}
