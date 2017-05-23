@extends('admin')
@section('container')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Member</strong>
		<a href="{{ url('admin/member/tambah') }}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Member</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $member)
			<tr>
				<td>{{ $x++ }}</td>
				<td>{{ $member->nama or 'nama kosong' }}</td>
				<td>{{ $member->nim or 'nim kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href='{{ url("admin/member/edit/{$member->id}") }}' class="btn btn-warning btn-xs" data-toggle="tootlip" data-placement="top" title="Ubah"><i class="fa 
							fa-pencil"></i></a>
							<a href='{{ url("admin/member/{$member->id}") }}' class="btn btn-info btn-xs" data-toggle="tootlip" data-placement="top" title="Lihat"><i class="fa 
								fa-eye"></i></a>
								<a href='{{ url("admin/member/hapus/{$member->id}") }}' class="btn btn-danger btn-xs" data-toggle="tootlip" data-placement="top" title="Hapus"><i class="fa 
									fa-remove"></i></a>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			</div>
			</div>
			@stop