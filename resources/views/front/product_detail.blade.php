@extends('front.master')

@section('title','Product Detail')

@section('content')

<div class="container">
    <br><br>
<div class="row">

    <div class="col-md-6 col-xl-12 col-lg-6">
       <div class="img-thumbnail">
           <img src="{{url('images/products',$product->image)}}" alt="Product" class="card-img">
           
       </div>


    </div>

    <div class="col-md-6  col-xl-12 col-lg-6">
        <br><br>
         <h2><span class="text-info">Product Name:</span> <?php echo ucwords($product->pro_name);?></h2>
        <h5><span class="text-dark"> Description: </span> {{$product->pro_info}}</h5>
        <h2 class="text-danger"><span class="text-success">Price: </span>$  {{$product->spl_price}}</h2>
        <p><b> Available: {{$product->stock}} In Stock</b></p>
        <a href="{{url('cart/addItem',$product->id)}}"  class="btn btn-sm btn-outline-secondary"> Add To Cart  </a>
        <br><br>

        <?php
        $wishlistData = DB::table('wishlist')->rightJoin('products','wishlist.pro_id','=','products.id')
        ->where('wishlist.pro_id','=',$product->id)->get();

        $count = App\Wishlist::where(['pro_id'=>$product->id])->count();
        ?>
        @if($count ==0)
        <form action="{{route('addToWishList')}}" method="post" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" value="{{$product->id}}" name="pro_id">
            <button type="submit" class="btn btn-success btn-md">Add to Wishlist</button>
        </form>
        @else
        <h3 style="color:green">Already Added to Wishlist <a href="{{url('/wishlist')}}">Wishlist</a></h3>
        @endif

    </div>

</div>
</div>

    @endsection
