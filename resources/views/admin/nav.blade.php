<nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/admin')}}">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('product.create')}}">
                <span data-feather="file"></span>
                Add Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('product.index')}}">
                <span data-feather="shopping-cart"></span>
                Products List
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('category.index')}}">
                <span data-feather="users"></span>
                Categories
              </a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('slider.create')}}">
                      <span data-feather="plus-square"></span>
                      Add Slider
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('slider.index')}}">
                      <span data-feather="play-circle"></span>
                      Sliders
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('adminorders.index')}}">
                      <span data-feather="shopping-cart"></span>
                      Orders
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      <span class="text-danger" data-feather="log-out"></span>
                     <span class="text-danger">Log Out</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </li>
           
          </ul>
        </div>
      </nav>






