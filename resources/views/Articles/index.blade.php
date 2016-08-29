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
			<table class="table table-bordered table-striped table-responsive">
				<thead class="thead-inverse">
				<tr>
					<td width="15%">Title</td>
					<td>Body</td>
					<td>Template</td>
					<td>Edit</td>
					<td>View</td>
				</tr>
				</thead>
				<tbody>
					@foreach($articles as $article)
					<tr>
						<td>{{$article->title}}</td>
						<td>{!! strip_tags($article->body , '<p><em><strong><a><h2><h1><h3><iframe><pre><code>') !!}</td>
						<td>{{$article->template}}</td>
						<td><a href="articles/{{$article->id}}/edit" class="btn btn-success">Edit</a></td>
						<td><a href="articles/{{$article->id}}" class="btn btn-primary">View More</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop