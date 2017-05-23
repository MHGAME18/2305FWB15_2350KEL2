@extends('admin')
@section('container')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('admin/member/awal') }}"><i style="color:#8a6d3b;" class="fa text-default fa-chevron-left"></i></a>Detail 
			Data Member</strong>
		</div>
		<table class="table">

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $member->nama }}</td>
			</tr>

			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>{{ $member->nim }}</td>
			</tr>

			<tr>
				<td>Angkatan</td>
				<td>:</td>
				<td>{{ $member->angkatan }}</td>
			</tr>

			<tr>
				<td>Username</td>
				<td>:</td>
				<td>{{ $member->pengguna->username }}</td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td>{{ md5($member->pengguna->password) }}</td>
			</tr>

			<tr>
				<td class="col-xs-4">Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $member->created_at }}</td>
			</tr>

			<tr>
				<td class="col-xs-4">Diupdate tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $member->updated_at }}</td>
			</tr>
		</table>
	</div>
	</div>
	</div>
	@stop