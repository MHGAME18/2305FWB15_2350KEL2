@extends('content2')
@section('container2')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('upload/awal') }}"><i style="color:#8a6d3b;" class="fa text-default fa-chevron-left"></i></a> Info Files</strong>
		</div>
		<table class="table">

			<tr>
				<td>Nama File</td>
				<td>:</td>
				<td>{{ $file->nama_file }}</td>
			</tr>

			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>{{ $file->id_kategori }}</td>
			</tr>

			<tr>
				<td>Upload By</td>
				<td>:</td>
				<td>{{ $file->pengguna_id }}</td>
			</tr>

			<tr>
				<td class="col-xs-4">Diupload tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $file->created_at }}</td>
			</tr>

			<tr>
				<td class="col-xs-4">Diupdate tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $file->updated_at }}</td>
			</tr>
		</table>
	</div>
	</div>
	</div>
	@stop