@extends('layout.main')
@section('title','shirts')
@section('content')
  <!-- products listing -->
  <!-- latest Shirts -->
  <div clss="row">
  	@forelse($shirts as $shirt)
   <div class="small-3 medium-3 large-3 columns">

   <div class="item-wrapper">
   	<div class="img-wrapper">
     <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
   	<a href="{{route('shirts')}}">
   		<h3>
   			{{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                        {{$shirt->price}}
                        
                    </h5>
                    <p>
                    {{$shirt->description}}    
               </p>
               </div>
   </div>
   	@empty
   	<h3>No shirts</h3>
   	@endforelse


   
     </div>
     @endsection
