@extends('app')

@section('content')
	<div class="container">
		<h1 class="text-center">Deck</h1>
		<hr/>

		<div style="margin-top: 2em;">
			<table class="table">
				<tr>
					<th>Title</th>
					<th>Rating</th>
					<th>Subject</th>
					<th>Private</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
					<tr>
						<td>{{ $deck->title }}</td>
						<td>{{ $deck->average_rating }}</td>
						<td>{{ $deck->subject }}</td>
						<td>
							@if ( $deck->private )
								True
							@else
								False
							@endif
						</td>
						<td>
							<button type="button" class="btn btn-info">
								<a href="{{ url('decks', [$deck->id, 'edit']) }}">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</a>
							</button>
						</td>
						<td>
							{!! Form::open(array('url' => 'decks/' . $deck->id, 'class' => 'pull-right')) !!}
			                    {!! Form::hidden('_method', 'DELETE') !!}
			                    {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>', array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
			                {!! Form::close() !!}
						</td>
					</tr>
			</table>
		</div>
		<a href="{{ url('decks') }}">View All Decks</a>
	</div>
@stop