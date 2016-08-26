@extends('layouts.app')
@section('metadescription' , strip_tags(str_limit($articles->body , $limit = 160 , $end = '.')))
@section('title', $articles->title)
@section('sidebar')
@section('content')
	<div class="container">
		 @include('templates.' . $articles->template)
	</div>
@stop