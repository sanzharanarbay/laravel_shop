@extends('front.master')

@section('title','Home Page')

@section('content')

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Sanzhar's Shop</h1>
            <p>
                <a href="{{route('login')}}" class="btn btn-primary my-2">Login</a>
                <a href="{{route('register')}}" class="btn btn-success my-2">Register</a>
            </p>
        </div>
    </section>


    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @forelse($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top"  alt="Card image cap" src="{{url('images/products',$product->image)}}" >
                        <div class="card-body">
                           <del>$ {{$product->pro_price}}</del>
                            <span class="price text-muted float-right"> $ {{$product->spl_price}}</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('productDetail',$product->id)}}" class="btn btn-sm btn-outline-secondary">View Product</a>
                                    <a href="{{url('cart/addItem',$product->id)}}"  class="btn btn-sm btn-outline-secondary"> Add To Cart  </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                 @empty
                  <h3>No Products</h3>
                @endforelse


            </div>
            {{$products->links()}}
        </div>
    </div>

</main>

@endsection
