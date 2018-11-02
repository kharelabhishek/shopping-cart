@extends('layout.main')



@section('content')
<section class="hero text-center">
	<br/>
	<br/>
	<br/>
	<br/>
	<h2>
		<strong>
         Hey! Welcome to my new shopping store
                </strong>
                </h2>
            <br>
            <a href="{{url('shirts')}}"><button class="button large">Check out My Shirts</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Micky&rsquo;s Latest Shirts
        </h2>
        </div>
        
	
<!-- latest SHirts -->
   <div class="row">
    @foreach($shirts as $shirt)
         <div class="small-3 columns">
            <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                          Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            {{ $shirt->name }}
                        </h3>
                    </a>
                    <h5>
                        {{ $shirt->price }}
                    </h5>
                    <p>
                       {{ $shirt->description }}
                    </p>
                </div>
            </div>
        
            @endforeach
 
        
   	<!-- Footer -->
   	<br>
   	<footer class="footer">
 

</footer>

    <script src="dist/js/vendor/jquery.js"></script>
    <script src="dist/js/app.js"></script>
    </body>
</html>
@endsection