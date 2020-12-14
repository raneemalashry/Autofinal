@extends('layouts.auto')
@section('title','Home')


@section('content')
<!-- start Home -->

<section class="Home">
    <div class="home-bg">
        <img src="{{asset('images/Group 4.png')}}" alt="">
        <p>  A great Collection of security Systems</p>
        <button><a href="{{route('shop')}}"> Shop Now</a></button>
    </div>
</section>
<section class="categories "> 

    <h2 class=""> Categories</h2> 

    <div class=" all">
        @foreach ($allcategories as $category)
            <div class="cat-1">
                <img src="{{asset('storage/categories/'.$category->image)}}" alt=""> 
                <p>{{$category->name}}</p>  
               

            </div>
            @endforeach
            
           

    </div>
   
    <h2 class=""> New Items</h2>
    <div class=" d-flex">
        
        <p> @include('partials.alerts')</p>
         
    </div>
  
    <section class=" best"> 
        
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
            @endif
 </section> 

 




 <section class="categories  "> 

    <h2 class=" ">Our Customers</h2> 

    <div class=" all ">

            <div class="cat-1 end">
                <img src="images/logo1.png" alt=""> 
                <p>CCTV</p>  

            </div>
            
            <div class="cat-1 c2 end ">
                <img src="images/business.png" alt=""> 
                <p>Auto Doors</p>  

            </div>
            
            <div class="cat-1 c3 end ">
                <img src="images/farouk 1.png" alt=""> 
                <p>Fire alarms</p>  

            </div>
            
            <div class="cat-1 c4 end ">
                <img src="images/kottab.png" alt=""> 
                <p> cashiers</p>  

            </div>
            
            <div class="cat-1 c5 end">
                <img src="images/Group 41.png" alt=""> 
                <p>Theft Alarms</p>  
            </div>

   
        </div> <br><br><br><br><br>

</section> 
<!--END HOME-->

@endsection
