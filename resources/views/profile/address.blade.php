@extends('front.master')
@section('title','Address Page')
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
                    <h3><span style="color: green;">{{ucwords(Auth::user()->name)}}</span>, Your Address</h3>
                    <hr>
                    <div class="container">
                        @if(session('msg'))
                            <div class="alert alert-info">{{session('msg')}}</div>
                        @endif
                        <form action="{{url('updateAddress')}}" method="post" role="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="PUT">
                            @foreach($address as $value)
                                <div class="form-group{{$errors->has('fullname')?' has-error':''}}">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" value="{{$value->fullname}}" id="fullname" placeholder="Full Name">
                                    <span class="text-danger">{{$errors->first('fullname')}}</span>
                                </div>
                                <div class="form-group{{$errors->has('city')?' has-error':''}}">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" value="{{$value->city}}" id="city" placeholder="City">
                                    <span class="text-danger">{{$errors->first('city')}}</span>
                                </div>
                                <div class="form-group{{$errors->has('state')?' has-error':''}}">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" name="state" value="{{$value->state}}" id="state" placeholder="State">
                                    <span class="text-danger">{{$errors->first('state')}}</span>
                                </div>
                                <div class="form-group{{$errors->has('pincode')?' has-error':''}}">
                                    <label for="pincode">Pincode</label>
                                    <input type="text" class="form-control" name="pincode" value="{{$value->pincode}}" id="pincode" placeholder="City">
                                    <span class="text-danger">{{$errors->first('pincode')}}</span>
                                </div>
                                <div class="form-group{{$errors->has('country')?' has-error':''}}">
                                    <label for="country">Pincode</label>
                                    <input type="text" class="form-control" name="country" value="{{$value->country}}" id="country" placeholder="City">
                                    <span class="text-danger">{{$errors->first('country')}}</span>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Update Address</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
