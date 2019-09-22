@extends('admin.master')

@section('title','Edit Product')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top: 50px;">
                <h3>Edit Product</h3>
                <div class="col-md-6">
                    <div class="panel-body mb-5">
                        <form action="{{route('product.update',$product->id)}}" method="post" role="form" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group{{$errors->has('pro_name') ? 'has-error':''}}">
                                <label for="pro_name">Name</label>
                                <input type="text" class="form-control" name="pro_name" id="pro_name" value="{{$product->pro_name}}" placeholder="Product Name">
                                <span class="text-danger"> {{$errors->first('pro_name')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('pro_code') ? 'has-error':''}}">
                                <label for="pro_code">Code</label>
                                <input type="text" class="form-control" name="pro_code" id="pro_code" value="{{$product->pro_code}}" placeholder="Code of Product">
                                <span class="text-danger"> {{$errors->first('pro_code')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('pro_price') ? 'has-error':''}}">
                                <label for="pro_price">Price</label>
                                <input type="number" class="form-control" name="pro_price" id="pro_price" value="{{$product->pro_price}}" placeholder="Price of Product">
                                <span class="text-danger"> {{$errors->first('pro_price')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('stock') ? 'has-error':''}}">
                                <label for="stock">Stock</label>
                                <input type="text" class="form-control" name="stock" id="stock" value="{{$product->stock}}" placeholder="Stock of Product">
                                <span class="text-danger"> {{$errors->first('stock')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('pro_info') ? 'has-error':''}}">
                                <label for="pro_info"> Description</label>
                                <textarea class="form-control" name="pro_info" id="pro_info"  rows="5"> {{$product->pro_info}}</textarea>
                                <span class="text-danger"> {{$errors->first('pro_info')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('category_id') ? 'has-error':''}}">
                                <label for="category_id"> Choose Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $id=>$category)
                                        <option value="{{$id}}">{{$category}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger"> {{$errors->first('category_id')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('image') ? 'has-error':''}}">
                                <label for="image">Image</label>
                                <input type="file"  name="image" class="form-control-file" id="image">
                                <span class="text-danger"> {{$errors->first('image')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('spl_price') ? 'has-error':''}}">
                                <label for="spl_price">Sale Price</label>
                                <input type="number" class="form-control" name="spl_price" id="spl_price" value="{{$product->spl_price}}" placeholder="Sale Price of Product">
                                <span class="text-danger"> {{$errors->first('spl_price')}}</span>
                            </div>

                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection()
