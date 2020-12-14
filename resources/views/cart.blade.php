@extends('layouts.auto')
@section('title','Cart')


@section('content')
<section class="shop">
    
    <h4 class="cart-h"> {{Cart::count()}} items in cart </h4> 
    <p> @include('partials.alerts')</p>
    <div class="shop-items">
        @if (count($cartitems)>0)
        @foreach ($cartitems as $cartitem)
        <div class="item d-flex f-i"> 
            <div class="img">
                <img src="{{asset('storage/items/'.$cartitem->options->image)}}" alt=""> 
            </div>  
            <div class="disc">
                <h2>{{$cartitem->name}}</h2>
                <p>{{$cartitem->options->desc}}
                </p>
            </div>
            <div class="cart">  
                <div class="add d-flex">
                    <form method="post" action="{{route('cart.update',$cartitem->rowId)}}">
                        @csrf
                        @method('put')
                    <button><i class=" fas fa-plus"></i> </button>
                    </form>
                    <p class=""> {{$cartitem->qty}} Item </p> 
                </div>
                <p class="pp">{{$cartitem->price}} $</p>
               
            </div>

     </div> <hr> 
        @endforeach
        @else
        <div class="item d-flex f-i"> 
           <p> There Is No Items In Cart </p> 

        </div>
        @endif
       
         
          <!--end of the first item-->
          
          </div> 
   <!-- end of third item-->
   <div class=" cost d-flex ">
      <h3>Total Cost: {{Cart::subtotal()}} $ </h3> 
      <form action="">
          <input type="submit" value="Submit order">
      </form>
    </div>
  
  </div>
      
  
  </section> 
  <!--END cart--> 

@endsection
