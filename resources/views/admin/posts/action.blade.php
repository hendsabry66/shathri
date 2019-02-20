{{Form::open(['url' => 'admin/posts/'.$id, 'method' => 'put'])}}
	<input type="hidden" name="approve" value="1">
	<input type="submit" class="btn btn-success" value="{{__('admin.accept')}} ">
       
{!! Form::close() !!}
{{Form::open(['url' => 'admin/posts/'.$id, 'method' => 'put'])}}
	<input type="hidden" name="approve" value="0">
	<input type="submit" class="btn btn-danger" value="{{__('admin.reject')}} ">
       
{!! Form::close() !!}