@extends('layouts.app')
@section('metadescription' , strip_tags(str_limit($article->body , $limit = 160 , $end = '.')))
@section('title', $article->title)
@section('sidebar')
@section('content')
	<div class="container">
		 @include('templates.' . $article->template)
	</div>
@stop