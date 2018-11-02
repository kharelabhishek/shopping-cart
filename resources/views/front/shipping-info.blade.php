@extends('layout.main')

@section('content')
<div class="row"></div>
<div class="small-6 small-centered columns">

<h3>shipping Info</h3>
{!! Form::open(['route' => 'checkout.shipping', 'method' => 'post']) !!}

<div class="form-group">
{{ Form::label('addressline', 'Address Line') }}
{{ Form::text('addressline', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{ Form::label('city', 'City') }}
{{ Form::text('city', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{ Form::label('state', 'State') }}
{{ Form::text('state', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{ Form::label('zip', 'Zip') }}
{{ Form::text('zip', null, array('class' => 'form-control')) }}
</div>
<div class="form-group">
{{ Form::label('country', 'Country') }}
{{ Form::text('country', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
{{ Form::label('phone', 'Phone') }}
{{ Form::text('phone', null, array('class' => 'form-control')) }}
</div>


{{ Form::submit('proceed to payment', array('class' => 'button sucess')) }}
 {!! Form::close() !!} 

@endsection