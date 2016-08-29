<div class="row">
	<div class="col-md-12">
		
		<hr>
		<h1>{{$articles->title}}</h1>
		<hr>
		<div class="wrapImg">
			@foreach($articles->photo as $photos)
			<img src="{{URL::asset($photos->path)}}" alt="{{$articles->title}}" class="img-responsive">
			@endforeach
		</div>
		<hr>
		<p>{!! strip_tags($articles->body , '<p><em><strong><a><h2><h1><h3><iframe><pre><code>') !!}</p>
		<hr>
		<p>Created: {{ str_limit($articles->published_at , $limit = 10 , $end = '.') }}</p>
		<hr>
		
		
		</div>
	</div>