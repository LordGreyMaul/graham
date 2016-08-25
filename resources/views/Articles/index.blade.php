@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<div class="col-md-12">
	<hr>
		<div class="col-md-6">
			<h1>Articles</h1>
		</div>
		<div class="col-md-6">
			<a href="{{URL::asset('/articles/create')}}" class="btn btn-primary pull-right" style="margin-top: 25px;">Create a New Article</a>
		</div>
		
	</div>
</div>
	<div class="row">
		<div class="col-md-12">
		<hr>
			<table class="table table-bordered">
				<thead class="thead-inverse">
				<tr>
					<td>Title</td>
					<td>Body</td>
					<td>Edit</td>
					<td>View</td>
				</tr>
				</thead>
				<tbody>
					@foreach($articles as $article)
					<tr>
						<td>{{$article->title}}</td>
						<td>{{strip_tags($article->body)}}</td>
						<td><a href="articles/{{$article->id}}/edit" class="btn btn-primary">Edit</a></td>
						<td><a href="articles/{{$article->id}}" class="btn btn-primary">View More</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop