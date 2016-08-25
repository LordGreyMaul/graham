@extends('layouts.app')
@section('content')
<div class="container">	
<div class="row">
	<div class="col-md-12 text-center">
	<hr>
	<h1 style="font-size: 50px;">404 Error</h1>
		<h1>So it would seem you stumbled on a page that does not exist! If this is a page that should be there
			please use my <a href="{{ URL::asset('/contact') }}">contact form</a> to get in touch! 
		</h1>

	</div>
</div>
</div>
@stop