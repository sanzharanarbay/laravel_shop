<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index');
    }
    public function orders(){
        $user_id = Auth::user()->id;
        $orders = DB::table('orders_products')
            ->leftJoin('products','products.id','=','orders_products.products_id')
            ->leftJoin('orders','orders.id','=','orders_products.orders_id')
            ->where('orders.user_id','=',$user_id)->paginate(10);
        return view('profile.orders',compact('orders'));
    }

    public function address(){
        $user_id = Auth::user()->id;
        $address = DB::table('address')->where('user_id',$user_id)
            ->limit(1)->get();
        return view('profile.address',compact('address'));
    }

    public function updateAddress(Request $request){
   $this->validate($request,[
       'fullname'=>'required|min:5|max:60',
       'pincode'=>'required|numeric',
       'city'=>'required|min:5|max:50',
       'state'=>'required|min:5|max:50',
       'country'=>'required'
   ]);
   $userid = Auth::user()->id;
   DB::table('address')->where('user_id',$userid)->update($request->except('_token','_method'));
   return back()->with('msg','Your address has been updated');

    }

    public function password(){
        return view('profile.updatePassword');
    }

    public function updatePassword(Request $request){
        $this->validate($request,[
            'oldPassword'=>'required|min:8|max:30',
            'newPassword'=>'required|min:8|max:30'
        ]);
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;

        if(!Hash::check($oldPassword, Auth::user()->password)){
            return back()->with('msg','The current password does not match!!!');
        }else{
            $request->user()->fill(['password'=>Hash::make($newPassword)])->save();
            return back()->with('msg','Password has been updated!!!');
        }
    }
}
