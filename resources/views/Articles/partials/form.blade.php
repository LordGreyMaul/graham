					<div class="form-group">
						{!! Form::label('title' , 'Title:') !!}
						{!! Form::text('title', null , ['class' => 'form-control']) !!}
					</div>
					<!-- Add the content for the blog post -->
					<div class="form-group">
						{!! Form::label('body' , 'Content:') !!}
						{!! Form::textarea('body', null , ['class' => 'form-control']) !!}
					</div>
					<!--Add the time and date -->
					<div class="form-group">
						{!! Form::label('published_at' , 'Publish On:') !!}
						{!! Form::input('date' , 'published_at', date('Y-m-d') , ['class' => 'form-control']) !!}
					</div>
					<!-- Submit button to add article -->
					<div class="form-group">
					
						{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
				<hr>
					
						{{ Form::submit('Delete', ['class' => 'btn btn-danger form-control']) }}
					
					</div>
					<script>
            		CKEDITOR.replace( 'body' );
       				 </script>