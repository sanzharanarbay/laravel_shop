@extends('admin.master')

@section('title','Categories')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top: 50px;">
        <h3 style="text-decoration: underline;">List Categories</h3><br>
         <ul class="nav navbar-nav">
             @if(!empty($categories))
                 <div class="table-responsive">
                     <table class="table table-hover">
                         <thead>
                         <tr>
                             <th>Category ID</th>
                             <th>Category Name</th>
                         </tr>
                         </thead>
                         <tbody>
                         @forelse($categories as $category)
                             <tr>
                                 <td>{{$category->id}}</td>
                                 <td> {{$category->name}}</td>
                             </tr>
                         @empty
                             <li>No Category</li>
                         @endforelse
                         </tbody>
                     </table>
                     {{$categories->links()}}
                 </div>
                 @endif
         </ul>

  <br><br><br><br>
        <form action="{{route('category.store')}}" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name"> Category name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </main>
    @endsection()
