@extends('admin.master')

@section('title','Add Slider')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: underline; margin-top: 50px;">
                <h3>Add New Slider</h3>
                <div class="col-md-6">
                    <div class="panel-body mb-5">
                        <form action="{{route('slider.store')}}" method="post" role="form" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group{{$errors->has('sli_title') ? 'has-error':''}}">
                                <label for="sli_title">Title</label>
                                <input type="text" class="form-control" name="sli_title" id="sli_title" placeholder="Slider Title">
                                <span class="text-danger"> {{$errors->first('sli_title')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('image') ? 'has-error':''}}">
                                <label for="image">Image</label>
                                <input type="file"  name="image" class="form-control-file" id="image">
                                <span class="text-danger"> {{$errors->first('image')}}</span>
                            </div>


                            <button type="submit" class="btn btn-primary">Add Slider</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection()
