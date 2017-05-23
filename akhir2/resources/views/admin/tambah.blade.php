@extends('admin')
@section('container')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{ url('admin/awal') }}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a> Tambah Data Pengguna</strong>
	</div>
	{!! Form::open(['url'=>'admin/simpan','class'=>'form-horizontal']) !!}
	@include('admin.form')
	<div style="width: 100%;text-align: right;">
		<button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
</div>
</div>
@stop