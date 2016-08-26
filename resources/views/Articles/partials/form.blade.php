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
					<div class="form-group">
						<label for="template">Template</label>
						<select name="template" id="template" class="form-control">
							<option value="sidebar">Sidebar</option>
							<option value="fullwidth">Full Width</option>
						</select>
						<p>If you are using a full width templete, the recommended image size is 1170px x 450px</p>
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