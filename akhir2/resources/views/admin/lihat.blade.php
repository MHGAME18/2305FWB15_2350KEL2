@extends('admin')
@section('container')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('admin/awal') }}"><i style="color:#8a6d3b;" class="fa text-default fa-chevron-left"></i></a>Detail 
			Data Pengguna</strong>
		</div>
		<table class="table">

			<tr>
				<td>Username</td>
				<td>:</td>
				<td>{{$pengguna->username}}</td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td>{{ md5($pengguna->password)}}</td>
			</tr>

			<tr>
				<td>Level</td>
				<td>:</td>
				<td>{{$pengguna->level}}</td>
			</tr>

			<tr>
				<td class="col-xs-4">Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$pengguna->created_at}}</td>
			</tr>

			<tr>
				<td class="col-xs-4">Diupdate tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$pengguna->updated_at}}</td>
			</tr>

			@if(!is_null($pengguna->mahasiswa))
				<tr>
					<td colspan="3" class="info"> Data Mahasiswa</td>
				</tr>
				@foreach($pengguna->mahasiswa->getAttributes() as $field=>$value)
				<tr>
					<td>{{$field}}</td>
					<td>:</td>
					<td>{{$value}}</td>
				</tr>
				@endforeach
			@endif

			@if(!is_null($pengguna->dosen))
				<tr>
					<td colspan="3" class="info"> Data Dosen</td>
				</tr>
				@foreach($pengguna->dosen->getAttributes() as $field=>$value)
				<tr>
					<td>{{$field}}</td>
					<td>:</td>
					<td>{{$value}}</td>
				</tr>
				@endforeach
			@endif
			
		</table>
	</div>
	</div>
	</div>
	@stop
	