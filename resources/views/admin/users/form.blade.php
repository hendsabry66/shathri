	<div class="box-body">
			<div class="form-group">
			    {{Form::label('name', __('admin.name'))}}
			    @if ($errors->has('name'))
				    <span class="error">{{ $errors->first('name') }}</span>
				@endif
			    {{Form::text('name',null,['class'=>'form-control'])}}
			    
			</div>
			<div class="form-group">
			    {{Form::label('email', __('admin.email'))}}
			     @if ($errors->has('email'))
				    <span class="error">{{ $errors->first('email') }}</span>
				@endif
			    {{Form::email('email',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
			    {{Form::label('password', __('admin.password'))}}
			    @if ($errors->has('password'))
				    <span class="error">{{ $errors->first('password') }}</span>
				@endif
			    {{Form::password('password',['class'=>'form-control'])}}
			</div>
			<div class="form-group">
			    {{Form::label('phone', __('admin.phone'))}}
			    @if ($errors->has('phone'))
				    <span class="error">{{ $errors->first('phone') }}</span>
				@endif
			    {{Form::text('phone',null,['class'=>'form-control'])}}
			   
			</div>
			<div class="form-group">
			    {{Form::label('image', __('admin.image'))}}
			    @if ($errors->has('image'))
				    <span class="error">{{ $errors->first('image') }}</span>
				@endif
			    {{Form::file('image',['class'=>'form-control'])}}
			   
			</div>

			<div class="form-group">
			    {{Form::label('birth_date', __('admin.birth_date'))}}
			    @if ($errors->has('birth_date'))
				    <span class="error">{{ $errors->first('birth_date') }}</span>
				@endif
			    {{Form::date('birth_date',null,['class'=>'form-control'])}}
			    
			</div>
			<div class="form-group">
			    {{Form::label('academic_qualifications', __('admin.academic_qualifications'))}}
			    @if ($errors->has('academic_qualifications'))
				    <span class="error">{{ $errors->first('academic_qualifications') }}</span>
				@endif
			    {{Form::text('academic_qualifications',null,['class'=>'form-control'])}}
			</div>
			<div class="form-group">
			  {{Form::label('definition', __('admin.definition'))}}
			  	@if ($errors->has('definition'))
				    <span class="error">{{ $errors->first('definition') }}</span>
				@endif
			  {{Form::textarea('definition',null,['class'=>'form-control'])}}
			 
			</div>
			<div class="form-group">
				
				<label class="radio-inline">{{ Form::radio('gender', 'male')}} {{__('admin.male')}} </label>
				<label class="radio-inline">{{ Form::radio('gender', 'female')}} {{__('admin.female')}} </label>
				@if ($errors->has('gender'))
				    <span class="error">{{ $errors->first('gender') }}</span>
				@endif
			</div>
			<div class="form-group">
			 	{{Form::label('status_id', __('admin.status'))}}
			 	@if ($errors->has('status_id'))
				    <span class="error">{{ $errors->first('status_id') }}</span>
				@endif
			 	{{Form::select('status_id', $statuses, null,['class'=>'form-control','id'=>'status'])}}
			</div>
			<div class="form-group hide" id="parent_id">
			 	{{Form::label('parent_id', __('admin.grands'))}}
			 	@if ($errors->has('parent_id'))
				    <span class="error">{{ $errors->first('parent_id') }}</span>
				@endif
			 	{{Form::select('parent_id', $grands, null,['class'=>'form-control'])}}
			</div>
			@if(!empty($user))
			<div class="form-group">
			 	{{Form::label('activation', __('admin.activation'))}}
			 	@if ($errors->has('activation'))
				    <span class="error">{{ $errors->first('activation') }}</span>
				@endif
			 	{{Form::select('activation', array('1' => __('admin.active'), '0' => __('admin.deactive')), null,['class'=>'form-control'])}}
			</div>
			@endif
			
		</div><!-- /.box-body -->