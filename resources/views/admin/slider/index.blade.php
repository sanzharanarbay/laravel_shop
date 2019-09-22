@extends('admin.master')

@section('title','Sliders List')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h3>Sliders </h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)


                    <tr>
                        <td><img src="{{url('images/sliders',$slider->image)}}" alt="" width="80"></td>
                        <td>{{$slider->sli_title}}</td>
                        <td>
                            <form action="{{route('slider.destroy',$slider->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                            </form>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>

    </main>

@endsection()
