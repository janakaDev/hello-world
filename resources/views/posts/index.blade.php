

@extends('main')
@section('title','|all posts')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>All posts</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-primary btn-h1-spacing" id="pri">Create new Post</a>
		</div>
		<hr>

	</div>

	<div class="row">
		<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created At</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($posts as $post)	
					<tr>
						<th>{{ $post->id }}</th>
						<td>{{ $post->title }}</td>
						<td>{{ substr($post->body,0,50)}}</td>
						<td>{{ $post->created_at }}</td>
						<td><a href="#" class="btn btn-primary">View</a><a href="#" class="btn btn-primary">Edit</a></td>
					</tr>
				@endforeach
			</tbody>

		</table>

		</div>
	</div>

@endsection