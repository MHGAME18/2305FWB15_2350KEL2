@extends('content2')
@section('container2')
<div class="col-md-12">
<div class="col-md-12 animated fadeIn" id="isicontent">
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data File</strong>
		<a href="{{ url('/upload') }}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Upload File</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr align="center">
				<td><b>No.</b></td>
				<td><b>Nama File</b></td>
				<td><b>Kategori</b></td>
				<td><b>Author</b></td>
				<!-- <td>Upload By</td>
				<td>Tanggal Upload</td> -->
				<td><b>Aksi</b></td>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($file as $file)
			<tr align="center">
				<td>{{ $x++ }}</td>
				<td>{{ $file->nama_file or 'file kosong' }}</td>
				<td>{{ $file->id_kategori or 'kategori kosong' }}</td>
				<td>{{ $file->pengguna_id or 'pengguna kosong' }}</td>
				<!-- <td>{{ $file->id_pengguna or 'angkatan kosong' }}</td>
				<td>{{ $file->created_at or 'LOL' }}</td> -->
				<td>
					<div class="btn-group" role="group">
						<a href='{{ url("upload/{$file->id}") }}' class="btn btn-info btn-xs" data-toggle="tootlip" data-placement="top" title="Info"><i class="fa 
							fa-info"></i></a>	
					</div>

					<div class="btn-group" role="group">
							<a href='{{ url("upload/download/".$file->id) }}' class="btn btn-primary btn-xs" data-toggle="tootlip" data-placement="top" title="Download"><i class="fa 
							fa-download"></i></a>
					</div>
					<?php
						if (Auth::check()) {
							if (Auth::user()->level == 1 || Auth::user()->level == 2) {
								?>
									&mdash;
									<div class="btn-group" role="group">
										<a href='{{ url("upload/hapus/".$file->id) }}' class="btn btn-danger btn-xs" data-toggle="tootlip" data-placement="top" title="Hapus">
											<i class="fa fa-remove"></i>
										</a>
									</div>
								<?php
							}
						}
					?>
					</td>
				</tr>
				@endforeach
		</tbody>
		
	</table>
</div>
</div>
</div>
@endsection