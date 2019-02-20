@extends('admin.master')
@section('style')

<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<style type="text/css">
    form{
        display: inline !important;
    }
</style>
@endsection
@section('breadcrumb')
  <h1>
    {{$user->name}} 
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{__('admin.home')}} </a></li>
    <li><a href="#"><i class="fa fa-dashboard"></i> {{__('admin.users')}} </a></li>
    <li class="active">{{$user->name}}</li>
  </ol>
@endsection
@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
			<h3 class="box-title"> {{$user->name}} </h3>
			</div><!-- /.box-header -->
			<div class="box-body">
               <dl class="dl-horizontal">
				  <dt>{{__('admin.name')}}</dt>
				  <dd>{{$user->name}}</dd>
				  <dt>{{__('admin.email')}}</dt>
				  <dd>{{$user->email}}</dd>
				  <dt>{{__('admin.phone')}}</dt>
				  <dd>{{$user->phone}}</dd>
				  <dt>{{__('admin.birth_date')}}</dt>
				  <dd>{{$user->birth_date}}</dd>
				  <dt>{{__('admin.image')}}</dt>
				  <dd>{{$user->image}}</dd>
				  <dt>{{__('admin.academic_qualifications')}}</dt>
				  <dd>{{$user->academic_qualifications}}</dd>
				  <dt>{{__('admin.definition')}}</dt>
				  <dd>{{$user->definition}}</dd>
				  <dt>{{__('admin.gender')}}</dt>
				  <dd>{{$user->gender}}</dd>
				  <dt>{{__('admin.status')}}</dt>
				  <dd>{{$user->status->name}}</dd>
				  <dt>{{__('admin.activation')}}</dt>
				  <dd>@if($user->activation == 1){{__('admin.active')}}@else {{__('admin.deactive')}}@endif</dd>
				</dl>

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div><!-- /.row -->

@endsection



