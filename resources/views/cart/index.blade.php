@extends('layout.main')
@section('content')

<div class="row">

<h3>cart Items</h3>


<table class="table table hover">
	
	<thead>
		<tr>
		<th>Name</th>
		<th>price</th>
		<th>quality</th>
		<th>size</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	@foreach($cartItems as $cartItem)
	<tr>
		<td>{{$cartItem->name}}</td>
		<td>{{$cartItem->price}}</td>

		<td>

			{!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
			<input name="qty" type="text" value="{{$cartItem->qty}}">
			

		</td>
         <td>
         	<div> {!! Form::select('size',['small'=>'small','medium'=>'medium','large'=>'large'], $cartItem->options->has('size')) !!}
         	</div>

         </td>

         <td>
         	<input style="float: left" type="submit" class="button success small" value="ok">
         	{!! Form::close() !!}

		{{--<td>{{ $cartItem->options->has('size') ? $cartItem->options->size : '' }}
		</td>   

		<input type="submit" class="btn btn-sm btn-default" value="ok">
			{!! Form::close() !!} 
		<td>
			{{--<a class="button" href="{{route('cart.destory',$cartItem->rowId)}}">Delete--}}
			{{--</a> --}}

			<form action="{{route('cart.destroy',$cartItem->rowid)}}" method="POST">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<input class="button" type="submit" value="Delete">
			</form>
		</td>
        </tr>


	</tr>
	@endforeach
	<tr>
		<td></td>
		
		<td>
          Tax: ${{Cart::tax()}}<br>
		Sub Total: $ {{Cart::subtotal()}}<br>
		Grand Total: $ {{Cart::total()}}
	</td>
		<td>Items:{{Cart::count()}}
		</td>
		<td></td>
		<td></td>
		</tr>
	</tbody>
</table>
</tbody>
</table>
</div>
<a href="{{url('/checkout')}}" class="button">checkout</a>
@endsection