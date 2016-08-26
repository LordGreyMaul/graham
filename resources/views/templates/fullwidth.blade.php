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
			
			<div class="col-md-12">
		
				<!-- Recent posts -->
				<div class="col-md-4">
					<hr>
				<h3>Recent posts</h3>
				@foreach($recent as $posts)
					<div class="recentposts">
						<h4>{{$posts->title}}</h4>
						<p class="body">{!! strip_tags(str_limit($posts->body , $limit = 100 , $end = '...')) !!}<p>
							<p class="date">{!! str_limit($posts->published_at , $limit = 10 , $end = '') !!}</p>
							<a class="button" href="http://grahammorby-raybould.info/show/{{$posts->id}}">Read More</a>
						</div>
						@endforeach
					</div>
					<!-- Twitter -->
					<div class="col-md-4">
						<hr>
						<h3>Twitter</h3>
						<a class="twitter-timeline"  href="https://twitter.com/GrahamMorbyDev" data-widget-id="313226072613339137">Tweets by @GrahamMorbyDev</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
					<!-- Treehouse -->
					<div class="col-md-4">
						<hr>
						<div class="team-treehouse">
							<!-- edit username here -->
							<a href="teamtreehouse.com/grahammorbyraybould" target='_blank'>
								
								<h3>Team Treehouse Achievements</h3>
								<h4><strong class='total'>0</strong> points have been earned</h4>
								<div class="pieChart group">
									<div class="pie"></div>
									<div class="legend"></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>