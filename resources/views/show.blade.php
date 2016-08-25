@extends('layouts.app')
@section('title', $articles->title)
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
					<hr>
					@foreach($articles->photo as $photos)
					<img src="{{URL::asset($photos->path)}}" alt="{{$articles->title}}" class="img-responsive">
					<hr>
					@endforeach
			</div>
			<div class="col-md-6">
				<h1>{{$articles->title}}</h1>
				<hr>
				<p>{!! strip_tags($articles->body , '<p><em><strong><a><h2><h1><h3>') !!}</p>
				<hr>
				<p>Created: {{ str_limit($articles->published_at , $limit = 10 , $end = '.') }}</p>
			</div>	
		</div>
	</div>
</div>


@stop