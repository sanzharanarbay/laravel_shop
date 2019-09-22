@extends('admin.master')

@section('title','Sliders List')

@section('content')

    <style>
        table td { padding:10px;}
        #cart_items{
            margin-left: 150px;
        }
    </style>
    <div class="container">
        <br><br><br>
        <section id="cart_items">
            <br>
            <div class="row">

                <div class="col-md-10">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>User </th>
                                <th>Product name</th>
                                <th>Product Code</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <?php  $user = \App\User::findOrFail($order->user_id);?>
                                <tr>
                                    <td>{{$order->created_at}}</td>
                                    <td><strong>{{ucwords($user->name)}}</strong></td>
                                    <td>{{ucwords($order->pro_name)}}</td>
                                    <td>{{$order->pro_code}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{$order->status}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$orders->links()}}
                </div>
            </div>

        </section>
    </div>

@endsection()
