@extends('main')
@section('title','|edit Blog post')
@section('content')
	<div class="row">
	{!! Form::model($post,['route'=>['posts.update',$post->id]] )  !!} 

	<div class="col-md-8">
		{{ Form::text('title',null,['class'=>'form-control']) }}
		{{ Form::textarea('body',null,['class'=>'form-control']) }}
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<di>Created at</di>
				<di>{{ date('M j, Y h:ia',strtotime($post->created_at ))}}</di>
			</dl>
			<dl class="dl-horizontal">
				<di>Last Updated</di>
				<di>{{ date('M j, Y h:ia',strtotime($post->updated_at )) }}</di>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">

				{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block' ))!!}	
					
				</div>
				<div class="col-sm-6">
				{{Form::submit('Save Changes',array('class'=>'btn btn-success btn-block'))}}
				
				</div>
			</div>

		</div>
	</div>
	{!! Form::close() !!}
</div>
@stop