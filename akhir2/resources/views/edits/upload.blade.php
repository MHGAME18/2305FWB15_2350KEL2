@extends('content2')
@section('container2')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{ url('upload/awal') }}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a> Upload File</strong>
	</div>
	<br>
	{!! Form::open(array('url' => '/upload/simpan', 'files' => true)) !!}
	<div class="form-group">
		<label class="col-sm-2 control-label" id="file">Uploader ID</label>
			<div class="col-sm-10">
				{!! Form::text('pengguna', $pengguna->id(),['class'=>'form-control','id'=>'id_pengguna','readonly']) !!}
			</div>
	</div>
	<br><br>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="id_kategori">Kategori</label>
		<div class="col-sm-10">
			{!! Form::select('kategori', $kategori->lists('nama_kategori', 'id'),null,['class'=>'form-control','id'=>'id_kategori', 'placeholder'=>"Pilih Kategori"]) !!}
		</div>
	</div>
	<br>
	<br>

	<div class="form-group">
		<label class="col-sm-2 control-label" id="file">Upload File</label>
		<div class="col-sm-10">
			{!! Form::file('file') !!}
			{!! Form::token() !!}
		</div>
	</div>
	<div style="width: 100%;text-align: right;padding: 15px;">
		<button class="btn btn-primary"><i class="fa fa-save"></i><b> Upload</b></button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Repeat</button>
	</div>
	{!! Form::close() !!}
</div>
</div>
</div>
@endsection

