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
    {{__('admin.edit_user')}}
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{__('admin.users')}}</a></li>
    <li class="active">{{__('admin.edit_user')}}</li>
  </ol>
@endsection
@section('content')

<!-- Horizontal Form -->
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">{{__('admin.edit_users')}} </h3>
	</div><!-- /.box-header -->
	<!-- form start -->
{{Form::model($user,['route'=>['users.update',$user],'method'=>'PATCH','files'=>true])}}
		@include('admin.users.form')
		<div class="box-footer">
		<button type="submit" class="btn btn-info pull-right">{{__('admin.edit')}}  </button>
		</div><!-- /.box-footer -->
	{{ Form::close() }}
</div><

@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		if ($("#status").val() == 3 || $("#status").val() == 4) {
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
