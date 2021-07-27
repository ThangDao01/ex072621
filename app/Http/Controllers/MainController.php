<?php

namespace App\Http\Controllers;


use App\Models\Apartment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//use MongoDB\Driver\Session;

class MainController extends Controller
{
    //add, show, update, delete
    public function show(Request $request)
    {
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            $shoppingCart = [];
        }
        return view('cart', [
            'shoppingCart' => $shoppingCart
        ]);
    }
    public function add($id)
    {
        $quantity = 1;
        $obj = Apartment::find($id);
        if ($obj == null) {
            return view('error.404', [
                'msg' => "Không tìm thấy sản phẩm"
            ]);
        }
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            $shoppingCart = [];
        }
        if (array_key_exists($id, $shoppingCart)) {
            $exitCartItem = $shoppingCart[$id];
            $exitCartItem->quantity += $quantity;
            $shoppingCart[$id] = $exitCartItem;
        } else {
            $cartItem = new Apartment();
            $cartItem->id = $obj->id;
            $cartItem->name = $obj->name;
            $cartItem->price = $obj->price;
            $cartItem->quantity = 1;
            $cartItem->inventory = $obj->inventory;
            $cartItem->thumbnail = $obj->thumbnail;
            $shoppingCart[$id] = $cartItem;
        }
        Session::put('shoppingCart', $shoppingCart);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $id = $request->get('id');
        $quantity = $request->get('quantity');
        if ($quantity <= 0) {
            return view('error.404', [
                'msg' => "Số lượng sản phẩm lớn hơn 0",
            ]);
        }
        $obj = Apartment::find($id);
        if ($obj == null) {
            return view('error.404', [
                'msg' => "Không tìm thấy sản phẩm"
            ]);
        }
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            $shoppingCart = [];
        }
        if (array_key_exists($id, $shoppingCart)) {
            $exitCartItem = $shoppingCart[$id];
            $exitCartItem->quantity = $quantity;
            $shoppingCart[$id] = $exitCartItem;
        } else {
            $cartItem = new Apartment();
            $cartItem->name = $obj->name;
            $cartItem->quantity = $obj->quantity;
            $shoppingCart[$id] = $cartItem;
        }
        Session::put('shoppingCart', $shoppingCart);
        return redirect('/cart/show');
    }

    public function delete($id)
    {
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            $shoppingCart = [];
        }
        unset($shoppingCart[$id]);
        Session::put('shoppingCart',$shoppingCart);
        return redirect('/cart/show');
    }
    public function reset(){
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
        } else {
            $shoppingCart = [];
        }
        Session::pull('shoppingCart', $shoppingCart);
        return redirect('/cart/show');
    }
}
