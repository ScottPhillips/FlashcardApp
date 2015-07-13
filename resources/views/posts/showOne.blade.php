@extends('app')

@section('content')
	<div class="container">
		<h1 class="text-center">Post</h1>
		<hr/>

		<div style="margin-top: 2em;">
			<table class="table">
				<tr>
					<th>Title</th>
					<th>Body</th>
					<th>Topic</th>
					<th>Score</th>
					<th>Publish Date</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
					<tr>
						<td>{{ $post->title }}</td>
						<td>{{ $post->body }}</td>
						<td>{{ $post->topic }}</td>
						<td>{{ $post->score }}</td>
						<td>{{ $post->published_at }}</td>
						<td>
							<button type="button" class="btn btn-info">
								<a href="{{ url('posts', [$post->id, 'edit']) }}">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</a>
							</button>
						</td>
						<td>
							{!! Form::open(array('url' => 'posts/' . $post->id, 'class' => 'pull-right')) !!}
			                    {!! Form::hidden('_method', 'DELETE') !!}
			                    {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
			                {!! Form::close() !!}
						</td>
					</tr>
			</table>
		</div>
		<a href="{{ url('posts') }}">View All Posts</a>
	</div>
@stop