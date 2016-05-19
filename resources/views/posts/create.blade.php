@extends('main')
@section('title','|create New post')



@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Create New Post</h3>
			{!! Form::open(array('route' => 'posts.store')) !!}
    			{{Form::label('title','Title:') }}
    			{{Form::text('title',null,array('class' =>'form-control'))}}

    			
    			{{Form::label('body','Post Body')}}
    			{{Form::textarea('body',null,array('class'=> 'form-control'))}}


    			{{Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block'))}}


			{!! Form::close() !!}
		</div>
	</div>
@endsection

