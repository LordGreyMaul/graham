@extends('layouts.app')
@section('content')

	<div class="row">
		<div class="col-md-12 adminArea">
			<div class="col-md-6 col-md-offset-3">
				<h1>Create a new article</h1>
				<hr>
					{!! Form::open(['url' => 'articles'] ) !!}
						@include ('Articles.partials.form', ['submitButtonText' => 'Add Article'])
					{!! Form::close() !!}
					@include ('errors.list')
			</div>
		</div>
</div>
@stop