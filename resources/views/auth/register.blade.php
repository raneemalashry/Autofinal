@extends('layouts/auth')
@section('title','Register')
    

@section('content')
<div class="logo-auto">
    <img src="images/Group 4.png" alt="">
  </div>
  <div class="login">
    @include('partials.alerts')
    <div class="space">
        <form class="second-page" method="POST" action="{{ route('register')}}">
          @csrf
            <input class="ff" type="text"  name='first_name' placeholder="First name">
           
            <input  class="ff" type="text"  name='last_name' placeholder="Last name">
            <input type="email"  name='email' placeholder="Email"><hr>
            <input type="password" name="password" placeholder="Password" > <hr>
            <input type="password" name="password_confirmation" placeholder="Repeat password"> <hr> 
            
            <button class="btn-f">  Sign up </button> <br>  
          </form>
    
  
  
      <p class="p-f ml-f"> already have account?</p> 
      <a class="cr-pass" href="{{ route('login') }}"> sign in  </a> <br>
        <p class=" p-s "> or </p>
        <p class=" p-t ">  Sign in using </p>
        <button class="btn-s ff "> <a href=""> <i class="fab fa-facebook-f"></i> Facebook </a></button>
        <button class=" btn-t "> <a href="{{ route('login.provider', 'google') }}"> <i class="fab fa-google"></i> Google </a></button>
    </div>

</div>

    
@endsection