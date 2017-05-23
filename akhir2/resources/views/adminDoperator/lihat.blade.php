@extends('admin')
@section('container')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('admin/doperator/awal') }}"><i style="color:#8a6d3b;" class="fa text-default fa-chevron-left"></i></a> Detail Data Operator</strong>
		</div>
		<table class="table">

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $doperator->nama }}</td>
			</tr>

			<tr>
				<td>NIP</td>
				<td>:</td>
				<td>{{ $doperator->nip }}</td>
			</tr>

			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td>{{ $doperator->telepon }}</td>
			</tr>

			<tr>
				<td>Username</td>
				<td>:</td>
				<td>{{ $doperator->pengguna->username }}</td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td>{{ md5($doperator->pengguna->password) }}</td>
			</tr>

			<tr>
				<td class="col-xs-4">Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $doperator->created_at }}</td>
			</tr>

			<tr>
				<td class="col-xs-4">Diupdate tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $doperator->updated_at }}</td>
			</tr>
		</table>
	</div>
	</div>
	</div>
	@stop