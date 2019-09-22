<?php

namespace App;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Orders extends Model
{
    protected  $table = 'orders';
    protected  $primaryKey = 'id';
    protected $fillable=['total','status','user_id'];


    public function orderFields(){
        return $this->belongsToMany(Products::class)->withPivot('qty','total');
    }


    public static function createOrder(){
        $user = Auth::user();
        $order = $user->orders()->create(['total'=>Cart::total(),'status'=>'pending']);
        $cartItems = Cart::content();

        foreach ($cartItems as $cartItem){
            $order->orderFields()->attach($cartItem->id,
                ['qty'=>$cartItem->qty, 'tax'=>Cart::tax(), 'total'=>$cartItem->qty*$cartItem->price]);
        }
    }
}
