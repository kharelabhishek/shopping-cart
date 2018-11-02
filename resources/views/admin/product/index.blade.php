@extends('admin.layout.admin')


@section('content')

<h3>Products</h3>

<ul>
	@forelse($products as $product)
	<li>
		<h4>Name of product:{{$product->name}}</h4>
		<h4>Category:{{$product->category->name}}</h4>
		<form action="{{route('product.destroy',$product->id)}}" method="POST">
			{{csrf_field()}}
			{{method_field('Delete')}}
			<input class="btn btn-sm btn-danger" type="submit" value="Delete">
		</form>
	</li>

	  @empty

	  <h3>no products</h3> 

	  @endforelse
      

	</ul>

	

@endsection