<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;


class CartItemController extends Controller {
    public function get() {
        return response()->json(CartItem::all(), 200);
    }


    public function post(Request $request) {
        $cartItem = CartItem::create($request->all());

        return response($cartItem, 201);
    }


    public function put(Request $request, $id) {
        $cartItem = CartItem::find($id);

        if (is_null($cartItem)) 
            return response->json(["error" => "Item Not Found!"], 404);
        
        $cartItem->update($request->all());

        return response($cartItem, 200);
    }


    public function delete(Request $request, $id) {
        $cartItem = CartItem::find($id);

        if (is_null($cartItem)) 
            return response->json(["error" => "Item Not Found!"], 404);
        
        $cartItem->delete();

        return response(null, 204);
    }
}
