@extends('admin')
@section('container')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('admin/doperator/awal') }}"><i class="fa text-default fa-chevron-left"></i></a> Perbarui Data Operator</strong>
	</div>
	{!! Form::model($doperator,['url'=>'admin/doperator/edit/'.$doperator->id,'class'=>'form-horizontal']) !!}
	@include('adminDoperator.form')
	<div style="width: 100%;text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
</div>
</div>
@stop