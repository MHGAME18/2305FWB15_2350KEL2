<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama', 'placeholder'=>"Nama"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nim">NIM</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','id'=>'nim','placeholder'=>"NIM"]) !!}
	</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label" id="angkatan">Angkatan</label>
		<div class="col-sm-10">
			{!! Form::select('angkatan', array( '2013' => '2013','2014'=> '2014', '2015'=> '2015', '2016'=> '2016'), null,['class'=>'form-control','id'=>'angkatan', 'placeholder'=>"Angkatan"]) !!}
		</div>
	</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
	</div>
</div>
<div class="form-group">	
	<div class="col-sm-10">
		{!! Form::hidden('level','3',['class'=>'form-control','id'=>'level', 'placeholder'=>"Level", 'readonly']) !!}
	</div>
</div>

