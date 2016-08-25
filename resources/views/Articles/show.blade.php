@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
				<h1>{{$articles->title}}</h1>
				<hr>
				<p>{{$articles->body}}</p>
			</div>
			<div class="col-md-4">
				@foreach($articles->photo as $photos)
				<img src="{{URL::asset($photos->path)}}" alt="{{$articles->title}}" class="img-responsive">
				@endforeach
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr>
			<h1>Add images to article</h1>
			<form action='{{ route("articles.addPhoto", [$articles->id]) }}' method="post" class="dropzone" id="addPhotosForm">
				{{ csrf_field() }}
			</form>
		</div>
	</div>
</div>
@stop