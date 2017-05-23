@extends('admin')
@section('container')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Operator</strong>
		<a href="{{ url('admin/doperator/tambah') }}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Operator</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>NIP</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $doperator)
			<tr>
				<td>{{ $x++ }}</td>
				<td>{{ $doperator->nama or 'nama kosong' }}</td>
				<td>{{ $doperator->nip or 'nip kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href='{{ url("admin/doperator/edit/{$doperator->id}") }}' class="btn btn-warning btn-xs" data-toggle="tootlip" data-placement="top" title="Ubah"><i class="fa 
							fa-pencil"></i></a>
							<a href='{{ url("admin/doperator/{$doperator->id}") }}' class="btn btn-info btn-xs" data-toggle="tootlip" data-placement="top" title="Lihat"><i class="fa 
								fa-eye"></i></a>
								<a href='{{ url("admin/doperator/hapus/{$doperator->id}") }}' class="btn btn-danger btn-xs" data-toggle="tootlip" data-placement="top" title="Hapus"><i class="fa 
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