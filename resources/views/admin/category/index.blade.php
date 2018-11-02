@extends('admin.layout.admin')

@section('content')

<div class="navbar">
<a class="navbar-brand" href="#">Categories</a>
	<ul class="nav navbar-nav">
		@if(!empty($categories))
       @forelse($categories as $category)
<li>
	<a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
  </li>
   @empty
  <li>No data</li>
  @endforelse
 @endif

</ul>


<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add category</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
  

{!! Form::open(['route' => 'category.store','method' => 'post']) !!}
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">$times;</button>
		<h4 class="modal-title">Add category</h4>
	</div>
<div class="modal-body">
	<div class="form-group">
	{{Form::label('name','Name') }}
	{{Form::text('name',null,array('class' => 'form-control')) }}
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
	<button type="submit" class="btn btn-primary">Save changes</button>
</div>
</div>
{!! Form::close() !!} 

</div>	
</div>


</div>
@if(!empty($products))
<section>
	<h3>products</h3>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>products</th>
			</tr>
		</thead>
		<tbody>
			@forelse($products as $product)
			<tr>
				<td>{{$product->name}}</td>
			</tr>
			@empty
			<tr><td>No Data</td></tr>
       @endforelse
   </tbody>
</table>
</section>
@endif

@endsection
		
		

