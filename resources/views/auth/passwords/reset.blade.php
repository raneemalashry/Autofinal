@extends('layouts.auth')



@section('title','Reset Password')
    

@section('content')
<div class="logo-auto">
    <img src="../images/Group 4.PNG" alt="">
  </div>

 <div class="login">
     <div class="space">
    @include('partials.alerts')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
            
        <input id="email" type="email" placeholder="    Enter your E-mail" @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus><hr>
             <input id="password" type="password" placeholder="   Enter New Password"  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><hr>
             <input id="password-confirm" type="password"  placeholder="  Confirm Password" name="password_confirmation" required autocomplete="new-password"><hr>
             <button class="btn-f ff"> Reset Password </button> <br>
             
         </form>
        
     </div>
 </div>

@endsection