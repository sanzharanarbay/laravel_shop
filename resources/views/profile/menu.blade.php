<nav class="nav flex-column">
    <a class="nav-link" href="{{'/profile'}}">My Profile</a>
    <a class="nav-link" href="{{'/orders'}}">My Orders</a>
    <a class="nav-link" href="{{'/address'}}">My Address</a>
    <a class="nav-link" href="{{url('/password')}}">Change Password</a>
    <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
       <span class="text-danger">Logout</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
