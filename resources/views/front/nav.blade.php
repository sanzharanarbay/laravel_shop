

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('images/logo.png')}}" alt="Logo" height=75;></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::is('home') ? 'active': '' }}">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ Request::is('shop') ? 'active': '' }}">
          <a class="nav-link" href="{{route('shop')}}">Shop</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php $cats = DB::table('categories')->get();?>
              @foreach($cats as $cat)
            <a class="dropdown-item" href="{{url('category',$cat->id)}}">{{ucwords($cat->name)}}</a>
                  @endforeach
          </div>
        </li>
        <li class="nav-item {{ Request::is('contact') ? 'active': '' }}">
          <a class="nav-link" href="{{url('/contact')}}">Contact</a>
        </li>
          <li class="nav-item {{ Request::is('wishlist') ? 'active': '' }}">
              <a class="nav-link" href="{{url('wishlist')}}">Wishlist <span style="color:green; font-weight: bold;"> ({{\App\Wishlist::count()}})</span></a>
          </li>

         <?php if(Auth::check()){?>
         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
             <div class="dropdown-menu">
                 <a  class="dropdown-item" href="#">{{Auth::user()->name}}</a>
                 <a  class="dropdown-item" href="{{url('/profile')}}"><span class="text-success">Profile</span></a>
                 <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <span class="text-danger">Logout</span>
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
             </div>
         </li>

          <?php  }else{ ?>
           <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
          <?php   }?>
          <li class="nav-item" style="list-style-type: none;">
              <a href="{{url('/cart')}}" class="nav-link"> &nbsp;Cart &nbsp;({{Cart::count()}} items)&nbsp;({{Cart::total(  )}}$)</a>
          </li>
      </ul>

    </div>
  </nav>
