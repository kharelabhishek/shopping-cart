@extends('admin.layout.admin')


@section('content')

<h3>Add Product</h3>
<div class="row">
<div class="col-md-4 col-md-offset-3">

{!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}

<div class="form-group">
	{{Form::label('name', 'Name') }}
{{-- 	<label name="name">Name</label>
 --}}	{{Form::text('name', null, array('class' => 'form-control')) }}
</div>


<div class="form-group">
	{{Form::label('description', 'Description') }}
	{{Form::textarea('description', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{Form::label('price', 'Price') }}
	{{Form::text('price', null, array('class' => 'form-control')) }}
</div>


<div class="form-group">
	{{Form::label('size', 'Size') }}
	{{Form::select('size', ['small' => 'small', 'medium' => 'medium', 'lage'=>'lage'], null,['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{Form::label('image', 'Image') }}
	{{Form::file('image',array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{Form::label('category_id', 'Category') }}
	{{Form::select('category_id',$categories, null, ['class' => 'form-control','placeholder'=>'select']) }}
</div>

   {!! Form::submit('Create', array('class' => 'btn btn-default')) !!}
   {!! Form::close() !!}
</div>
</div>

@endsection