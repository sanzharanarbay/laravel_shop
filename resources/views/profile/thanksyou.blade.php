@extends('front.master')
@section('content')
    <style>
        table td { padding:10px
        }</style>
    <br>
    <br>

    <section id="cart_items">
        <div class="container">
            <div class="text-center">
                <h3>Thanks For your Order :
                    <span style='color:green'>{{ucwords(Auth::user()->name)}}</span></h3>
            </div><!--/breadcrums-->
        </div>
    </section>
@endsection
