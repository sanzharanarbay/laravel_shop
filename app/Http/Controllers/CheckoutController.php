<?php

namespace App\Http\Controllers;

use App\Address;
use App\Orders;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){

        if(Auth::check()){
         $cartItems = Cart::content();
         return view('cart.checkout',compact('cartItems'));
        }else{
            return redirect('login');
        }
    }

    public function  address(Request $request){
     $this->validate($request,[
     'fullname'=>'required|min:5|max:60',
         'pincode'=>'required|numeric',
         'city'=>'required|min:5|max:50',
         'state'=>'required|min:5|max:50',
         'country'=>'required'
     ]);
     $request['user_id'] = Auth::user()->id;
     Address::create($request->all());
     // after insert to Address table we have to also insert to Order table
     Orders::createOrder();
     Cart::destroy();
     return view('profile.thanksyou');
    }
}
