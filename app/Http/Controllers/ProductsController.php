<?php

namespace App\Http\Controllers;

use App\Category;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::orderBy('created_at','desc')->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');
        $this->validate($request,[
           'pro_name'=>'required',
            'pro_code'=>'required',
            'pro_price'=>'required','numeric',
            'stock'=>'required',
            'category_id'=>'required',
            'pro_info'=>'required',
            'spl_price'=>'required','numeric',
            'image'=>'image|mimes:jpg,png,jpeg,svg|max:10000'
        ]);
        $image = $request->image;
        if($image){
            $imageName = $image->getClientOriginalName();
            $image->move('images/products',$imageName);
            $formInput['image'] = $imageName;
        }else{
            $formInput['image'] = 'noimage.jpg';
        }
        Products::create($formInput);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::findOrFail($id);
        $categories = Category::pluck('name','id');
        return view('admin.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $formInput = $request->except('image');
        $this->validate($request,[
            'pro_name'=>'required',
            'pro_code'=>'required',
            'pro_price'=>'required','numeric',
            'stock'=>'required',
            'category_id'=>'required',
            'pro_info'=>'required',
            'spl_price'=>'required','numeric',
            'image'=>'image|mimes:jpg,png,jpeg,svg|max:10000'
        ]);
        $image = $request->image;
        if($image){
            $imageName = $image->getClientOriginalName();
            unlink('images/products/'.$product->image);
            $image->move('images/products',$imageName);
            $formInput['image'] = $imageName;
        }else{
            $formInput['image'] = $product->image;
        }
        $product->update($formInput);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        if($product->image != 'noimage.jpg')
        {
            unlink('images/products/'.$product->image);
        }
        $product->delete();
        return redirect()->back();
    }
}
