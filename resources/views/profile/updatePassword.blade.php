@extends('front.master')
@section('title','Password Page')
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
                    <h3><span style="color: green;">{{ucwords(Auth::user()->name)}}</span>, Update Your Password</h3>
                    <hr>
                    <div class="container">
                        @if(session('msg'))
                            <div class="alert alert-info">{{session('msg')}}</div>
                        @endif
                        <form action="{{url('/updatePassword')}}" method="post" role="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group{{$errors->has('oldPassword')?' has-error':''}}">
                                <label for="oldPassword">Current Password</label>
                                <input type="password" class="form-control" name="oldPassword" id="oldPassword" placeholder="Old Password">
                                <span class="text-danger">{{$errors->first('oldPassword')}}</span>
                            </div>
                            <div class="form-group{{$errors->has('newPassword')?' has-error':''}}">
                                <label for="newPassword">New Password</label>
                                <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="New Password">
                                <span class="text-danger">{{$errors->first('newPassword')}}</span>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
