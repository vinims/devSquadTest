<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index(Request $request){
        $product = Product::all();
        return response()->json($product);
    }

    public function show(Request $request, $id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }


    public function create(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->save();

        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        // Find the product entry
        $product = Product::find($id);
        
        // Update product Entry
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->save();

        return $product;
    }


    public function delete(Request $request, $id)
    {
        // Find the product entry
        $product = Product::find($id);

        // Delete Entry        
        $product->delete($id);

        return response()->json($product);
    }
}

