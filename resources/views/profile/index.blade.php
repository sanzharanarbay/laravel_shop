@extends('front.master')
@section('title','Profile Page')
@section('content')
    <style>
        table td { padding:10px;}
    </style>
    <div class="">
        <section id="cart_items">
            <br>
            <div class="row">
                <div class="col-md-4 well well-sm">
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Profile Menu</div>
                        <div class="card-body text-secondary">
                            @include('profile.menu')
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><h3>Welcome <span style='color:green'>{{ucwords(Auth::user()->name)}}</span></h3></li>
                        <table border="0" align="center">
                            <tr>
                                <td><a href="{{url('/orders')}}" class="btn btn-success">My Orders</a></td>
                                <td><a href="{{url('/address')}}" class="btn btn-success">My Address</a></td>
                                <td><a href="{{url('/password')}}" class="btn btn-success">Change Password</a></td>
                            </tr>
                        </table>
                    </ol>
                </div>
            </div>
        </section>
    </div>
@endsection
