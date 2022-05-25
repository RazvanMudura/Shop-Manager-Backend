<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller {
    public function get() {
        return response()->json(Product::all(), 200);
    }


    public function post(Request $request) {
        $product = Product::create($request->all());

        return response($product, 201);
    }


    public function put(Request $request, $id) {
        $product = Product::find($id);

        if (is_null($product)) 
            return response->json(["error" => "Item Not Found!"], 404);
        
        $product->update($request->all());

        return response($product, 200);
    }

    
    public function delete(Request $request, $id) {
        $product = Product::find($id);

        if (is_null($product)) 
            return response->json(["error" => "Item Not Found!"], 404);
        
        $product->delete();

        return response(null, 204);
    }
}
