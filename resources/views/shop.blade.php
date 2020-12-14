@extends('layouts.auto')
@section('title','Shop')
@section('content')

<!-- start shop -->

<section class="shop">
    
  

    <div class=" d-flex">
        
        <p> @include('partials.alerts')</p>
         
    </div>
   
  <div class="shop-items">
    @if (count($items)>0)
    @foreach ($items as $item)
    <div class="item d-flex f-i">
    <div class="img">
        <img src="{{asset('storage/items/'.$item->image)}}"  alt=""> 
        </div>  
        <div class="disc">
        <h2>{{$item->name}}</h2>
            <p>{{$item->desc}}
            </p>
        </div>
        <div class="price">
            <p>{{$item->price}} $</p>
           
            <button> <a href="@if(Auth::check()){{route('cart.edit',$item->id)}}"
                @else
               {{route('login')}}
             @endif"> <i class="fas fa-shopping-cart"></i> Add to cart </a></button>
          
        
        </div>

</div> <hr> 
    @endforeach
    @else
    <div class="item d-flex f-i">
        There is No Items
    </div>

      
<!--end of the first item-->
    @endif
       
           
        
      

<!--count pages -->     

{{  $items->render('partials.paginate') }}

</div>





</section> 
<!--END shop--> 

   
@endsection