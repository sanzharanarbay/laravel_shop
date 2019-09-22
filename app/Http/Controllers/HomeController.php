<?php

namespace App\Http\Controllers;

use App\Products;
use App\Slider;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Products::orderBy('created_at','desc')->paginate(10);
        $sliders = Slider::all();
        return view('front.home', compact('products','sliders'));
    }

    public function shop(){
        $products = Products::orderBy('created_at','desc')->paginate(10);
        return view('front.shop',compact('products'));
    }

    public function showCates( $id){
        $category_products = Products::where('category_id', $id)->paginate(10);
        $id_= $id;
        return view('front.category_list_pro',compact('category_products', 'id_'));
    }

    public function detailPro($id){
        $product = Products::findOrFail($id);
        return view('front.product_detail', compact('product'));
    }

    public function View_wishList(){
        $products = DB::table('wishlist')
            ->leftJoin('products','wishlist.pro_id','=','products.id')
            ->paginate('5');
        return view('front.wishlist',compact('products'));

    }

    public function addWishList(Request $request){
        $wishlist = new Wishlist();
        $wishlist->user_id = Auth::user()->id;
        $wishlist->pro_id = $request->pro_id;
        $wishlist->save();
        $product = Products::findOrFail($request->pro_id);
        $products = DB::table('products')->where('id',$request->pro_id)->get();
        return view('front.product_detail',compact('products','product'));
    }

    public function removeWishlist($id){
        DB::table('wishlist')->where('pro_id','=', $id)->delete();
        return back()->with('msg','Item removed from Wishlist');
    }
}
