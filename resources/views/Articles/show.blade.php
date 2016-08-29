@extends('layouts.app')
@section('content')
<div class="container">
	<div class="container">
		 @include('Articles.templates.' . $articles->template)
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