 <!--Navbar -->
 <nav class="mb-1 navbar-nav navbar-expand-lg navbar-dark default-color sticky-top"
     style="background:#002060 !important;margin-top:0px;">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
         aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="{{url('/')}}"><i class="fa fa-home"></i> Home
                     <span class="sr-only"></span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{url('/news')}}"><i class="far fa-newspaper"></i> News <img
                         src="{{url('assets\inc\images\new.gif')}}"></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{url('/aboutus')}}"><i class="fa fa-globe" aria-hidden="true"></i> About us
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{url('/members-exclusive')}}"><i class="fa fa-user" aria-hidden="true"></i>
                     Member's
                     Exclusive</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{url('/posts')}}"><i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                     Posts</a>
             </li>
         </ul>
         <ul class="navbar-nav ml-auto">
             <!-- Authentication Links -->
             @guest
             <li class="nav-item dropdown">
                 <a id="showLogin" class="nav-link" data-toggle="modal" data-target="#modalLoginAvatar" href="{{ route('login') }}">{{ __('Login') }} <i
                         class="fas fa-sign-in-alt"></i></a>
             </li>
            
             @if (Route::has('register'))
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
             </li>
             @endif
             @else
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false" v-pre>
                     <i class="fas fa-user"></i><span class="caret"></span>
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </div>
             </li>
             @endguest
         </ul>
     </div>
 </nav>
 <!--/.Navbar -->
