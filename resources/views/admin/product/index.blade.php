@extends('admin.master')

@section('title','Products List')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h3>Products </h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)


                <tr>
                    <td><img src="{{url('images/products',$product->image)}}" alt="" width="80"></td>
                    <td>{{$product->pro_name}}</td>
                    <td>{{$product->pro_price}}</td>
                    <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-success">Edit</a></td>
                    <td>
                        <form action="{{route('product.destroy',$product->id)}}" method="post">
                        {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>

                    </td>
                </tr>

                    @endforeach
                </tbody>
            </table>
            {{$products->links()}}
        </div>

    </main>

    @endsection()
