@extends('layouts.auth')
@section('title','Login')
@section('content')
<div class="logo-auto">
    <img src="images/Group 4.png" alt="">
  </div>
<div class="login">
    @include('partials.alerts')
    <div class="space">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <input type="email"  name="email" placeholder="   Email" ><hr>
            <input type="password" name="password" placeholder="   Password" ><hr>
            @if (Route::has('password.request'))
            <a class="link-f" href="{{ route('password.request') }}"> forgot password ?</a> <br>
            @endif
            <input type="submit"  class="btn-f" value="Sign in">  
    </form>
        <p class="p-f">Don't have account?</p> 
        <a class="cr-pass" href="{{route('register')}}"> Create account</a> <br>
         <p class=" p-s "> or </p>
         <p class=" p-t ">  Sign in using </p>
         <button class="btn-s"> <a href=""> <i class="fab fa-facebook-f"></i> Facebook </a></button>
         <button class=" btn-t"> <a href="{{ route('login.provider', 'google') }}"> <i class="fab fa-google"></i> Google </a></button>
    </div>    
</div>

    
@endsection