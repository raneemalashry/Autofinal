<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title> 
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body> 
    <!--start of nav bar-->
    <div class="navigation">
        <div class="nav-left"> 
                <img src="{{asset('images/Group 4.png')}}" class="logo" alt=""> 
            
                <ul class="navigation-ul">
                    <li> <a href="{{route('home')}}">Home</a></li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Shop
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($allcategories as $category)
                            <a class="dropdown-item text-dark"  href="{{route('shop.category', $category->id)}}">{{$category->name}}</a>
                                @endforeach
                           
                    </li>
                    <li><a href="">Our Customer</a></li>
                    <li><a href=""> Contact us</a></li>
            </ul>
        </div> 


        <div class="nav-right"> 
            <ul> 
                <li> 
                    <input class="inp-search" type="search" placeholder="Search">
                </li>
                <li> <a href="@if(Auth::check()){{route('cart.index')}}
                @else
               {{route('login')}}
             @endif"><i class="fas fa-2x fa-cart-plus"></i></a></li> 


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-2x fa-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @guest
                    <a class="dropdown-item text-dark" href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                    <a class="dropdown-item text-dark" href="{{ route('register') }}">Register</a>
                    @endif
                    @else
                    <a class="dropdown-item text-dark" href="#">Profile</a>
                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" >
                     Logout </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endguest
                </div>
            </li>
            </ul>    
        </div> 

</div> 
<!-- the end of nav bar-->
@yield('content')

<section class="tt">
    <section class="contact d-flex" id="contact">
    
        <div class="contact-us" >
            <h1>Contact us</h1>
            <hr> 
            <p>
               Mansoura-dakahlia-Egypt
               <br>
               Auto-sec@gmail.com 
               <br> +2 123 456 789
            </p> 
        </div> 
   
        <div class="icons-h5">
   
           <div class="d-flex icons">
               <a href=""><i class=" fa-2x fab fa-instagram-square"></i></a>
               <a href=""><i class=" fa-2x fab fa-twitter-square"></i></a>
               <a href=""><i class=" fa-2x fab fa-facebook-square"></i></a>
               <a href=""><i class=" fa-2x fab fa-youtube"></i></a>
           </div> 
           <h5> Auto security</h5>
   
        </div>  
        <div class="img-h6">
            <img src="images/Group 4.png" alt=""> 
            <h6>Your Third Eye</h6>
   
        </div>
   
    </section>

</section>

    <script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>  
    <script src="{{asset('js/wow.min.js')}}"></script>  
    <script>
      new WOW().init();
     </script>

</body>
</html>