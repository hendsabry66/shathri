  <a href="{{ url('admin/users/'.$id) }}" class="btn btn-info">{{ __('admin.show')}}  </a>
 <a href="{{ url('admin/users/'.$id.'/edit') }}" class="btn btn-primary">{{ __('admin.edit')}}  </a>
  {{Form::open(['url' => 'admin/users/'.$id, 'method' => 'delete'])}}
            <input type="submit" class="btn btn-danger" value="{{__('admin.delete')}} ">
       
    {!! Form::close() !!}