@extends('front.master')
    @section('title','Shop')
@section('content')
    <main role="main">

        <div class="jumbotron">
            <h1 class="display-4">Online Shop</h1>
            <p class="lead"> Here you can find all information about products</p>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>


        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    @forelse($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top"  alt="Card image cap" src="{{url('images/products',$product->image)}}" >
                                <div class="card-body">
                                    <p class="card-text"> {{$product->pro_name}}</p>
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



    @endsection()
