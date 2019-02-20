@extends('admin.master')
@section('style')
<style type="text/css">
	.error{
		color:red;
		margin-right:10px;
	}
	.hide{
		display: none;
	}
</style>

@endsection
@section('breadcrumb')
  <h1>
    المستخدمين
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin/users')}}"><i class="fa fa-dashboard"></i> {{__('admin.users')}}</a></li>
    <li class="active">{{__('admin.add_user')}}</li>
  </ol>
@endsection
@section('content')

<!-- Horizontal Form -->
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">{{__('admin.new_add_user')}}</h3>
	</div><!-- /.box-header -->
	<!-- form start -->
	
	{{ Form::open(['url' => 'admin/users', 'method' => 'post', 'files' => true]) }}

		@include('admin.users.form')
		<div class="box-footer">
		<button type="submit" class="btn btn-info pull-right">{{__('admin.add')}}  </button>
		</div><!-- /.box-footer -->
	{{ Form::close() }}
</div><!-- /.box -->
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		if ($(this).val() == 3 || $(this).val() == 4) {
				$("#parent_id").removeClass("hide");
		}
		$("#status").change(function(){
			if ($(this).val() == 3 || $(this).val() == 4) {
				$("#parent_id").removeClass("hide");
			} else {
				$("#parent_id").addClass("hide");
			}

		});
	});
</script>

@endsection
