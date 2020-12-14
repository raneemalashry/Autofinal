@extends('layouts.auth')



@section('title','Reset Password')
    

@section('content')
<div class="logo-auto">
    <img src="../images/Group 4.PNG" alt="">
  </div>

 <div class="login">
     <div class="space">
        @if (session('status'))
        <div >
            <ul>
                <li class="success">{{session('status')}}</li> </h7>
        </ul>
        </div>
    @endif
    @include('partials.alerts')
         <form class="third-form"  method="POST" action="{{ route('password.email') }}">
            @csrf
            
             <input id="email" type="email" placeholder="   Enter your Email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus ><hr>
          
             <button class="btn-f ff">  Reset Password </button> <br>
             
         </form>
         <a class="cr-pass  register " href="{{ route('login') }}">Return to login </a> <br>
     </div>
 </div>

@endsection