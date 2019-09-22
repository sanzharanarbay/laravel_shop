@extends('front.master')
@section('title','Wishlist Page')
@section('content')
    <div class="container"><br>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 style="text-align: center; text-decoration: underline;">Wishlist Products</h3><br>
            @if(session('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif
            <div class="row">
                <?php if($products->isEmpty()){ ?>
                    <div align="center">  <img src="{{asset('dist/img/wishlist-empty.jpg')}}"/></div>
                <?php } else{ ?>
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-3 col-sm-3" style="padding-bottom: 20px;">

                        <div class="text-center badge badge-light">
                            <a href="{{url('/product_details',$product->id)}}">
                                <img src="{{url('images/products',$product->image)}}" alt="" width="200">
                            </a>
                            <h2>$ {{$product->pro_price}}</h2>
                            <p>
                                <a href="{{url('/product_details',$product->id)}}">
                                    {{$product->pro_name}}
                                </a>
                            </p>
                            <a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="btn btn-default add-to-cart">
                                 Add to cart</a>

                            <a href="{{url('/removeWishList', $product->id)}}" style="color:red" class="btn btn-default btn-block">
                                Remove from wishlist
                            </a>
                        </div>
                    </div>
                @endforeach
                <?php }?>
            </div>
        </div>
    </div>

@endsection
