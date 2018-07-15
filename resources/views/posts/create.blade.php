@extends('main')

@section('name','| create new post')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create a new Post</h1>
			<hr>
			{!! Form::open(array('route' => 'posts.store'))!!}
				{{Form::label('title','Title:')}}
				{{Form::text('title',null,array('class' => 'form-control'))}}

				{{Form::label('slug','Slug:')}}
				{{Form::text('slug',null,array('class'=>'form-control','required'=>'','minLength'=>'5','maxLength'=>'255'))}}

				{{Form::label('body','Post body:')}}
				{{Form::textarea('body',null,array('class' => 'form-control'))}}

				{{Form::submit('Create',array('class' => 'btn btn-success btm-lg btn-block', 'style' => 'margin-top: 20px;'))}}
			{!!Form::close()!!}
		</div>
	</div>

@endsection