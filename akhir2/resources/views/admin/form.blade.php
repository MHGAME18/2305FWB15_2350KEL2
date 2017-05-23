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
	<label class="col-sm-2 control-label" id="level">Level</label>
	<div class="col-sm-10">
		{!! Form::select('level', array( '1' => '1','2'=> '2', '3'=> '3'), null,['class'=>'form-control','id'=>'level', 'placeholder'=>"Level"]) !!}
	</div>
</div>