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
    {{__('admin.articles')}} 
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{__('admin.home')}} </a></li>
    <li class="active">{{__('admin.articles')}}</li>
  </ol>
@endsection
@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
			<h3 class="box-title"> {{__('admin.articles')}} </h3>
			</div><!-- /.box-header -->
			<div class="box-body">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">
                      {{ Session::get('message') }}
                    </div>
                    
                @endif

                 {!! $dataTable->table(['class' => 'table table-hover table-bordered table-striped datatable' , 'width' => '100%'],true) !!}

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div><!-- /.row -->

@endsection

@section('script')
 <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@endsection