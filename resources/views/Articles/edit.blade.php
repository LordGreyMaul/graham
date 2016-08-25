@extends('layouts.app')
@section('content')

	<div class="row">
		<div class="col-md-12 adminArea">
			<div class="col-md-6 col-md-offset-3">
				<h1>Edit: {!! $articles->title !!}</h1>
				<hr>
					{!! Form::model($articles, ['method' => 'PATCH', 'url' => 'articles/' . $articles->id]) !!}
				@include ('articles.partials.form', ['submitButtonText' => 'Update Article'])
			{!! Form::close() !!}
				@include ('errors.list')
			</div>
		</div>
</div>
@stop