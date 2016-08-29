<div class="row">
	<div class="col-md-12">
		<div class="col-md-8">
			<hr>
			<div class="col-md-12">
				<h1>{{$article->title}}</h1>
				<hr>
				@foreach($article->photo as $photos)
				<img src="{{URL::asset($photos->path)}}" alt="{{$article->title}}" class="img-responsive">
				<hr>
				@endforeach
				<p>{!! strip_tags($article->body , '<p><em><strong><a><h2><h1><h3><iframe><pre><code>') !!}</p>
				<hr>
				<p>Created: {{ str_limit($article->published_at , $limit = 10 , $end = '.') }}</p>
				<hr>
			</div>
			<div class="col-md-12">
				<div id="disqus_thread"></div>
				<script>
				/**
				 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
				/*
				var disqus_config = function () {
				    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				*/
				(function() { // DON'T EDIT BELOW THIS LINE
				    var d = document, s = d.createElement('script');
				    s.src = '//http-www-grahammorby-raybould-info.disqus.com/embed.js';
				    s.setAttribute('data-timestamp', +new Date());
				    (d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</div>
		</div>
		<div class="col-md-4">
			<!-- Recent posts -->
			<div class="col-md-12">
				<h3>Recent posts</h3>
				<hr>
				@foreach($recent as $posts)
				<div class="recentposts">
					<h4>{{$posts->title}}</h4>
					<p class="body">{!! strip_tags(str_limit($posts->body , $limit = 100 , $end = '...')) !!}<p>
						<p class="date">{!! str_limit($posts->published_at , $limit = 10 , $end = '') !!}</p>
						<a class="button" href="http://grahammorby-raybould.info/show/{{$posts->slug}}">Read More</a>
					</div>
					@endforeach
				</div>
				<!-- Twitter -->
				<div class="col-md-12">
					<hr>
					<h3>Twitter</h3>
					<a class="twitter-timeline"  href="https://twitter.com/GrahamMorbyDev" data-widget-id="313226072613339137">Tweets by @GrahamMorbyDev</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<!-- Treehouse -->
				<div class="col-md-12">
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