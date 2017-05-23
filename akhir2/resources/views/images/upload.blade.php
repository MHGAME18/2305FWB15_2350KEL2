@extends('content2')
@section('container2')
<div class="panel panel-primary">
			<div class="panel-heading">
		<strong><a href="{{ url('images/index') }}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a> Upload File</strong>
	</div>
	<br>
		<!-- <form action="{{ url('images/index') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
		<input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                    <!-- <div class="form-group">
                        <label for="title" class="control-label col-md-3">Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" class="form-control" placeholder="Write title for your image...">
                        </div>
                    </div> -->
                    <br>
                    <div class="form-group">
                    	<label class="col-sm-2 control-label" id="photo">Upload Foto</label>
                    	<div class="col-sm-10">
                    		{!! Form::open(array('url' => '/images', 'files' => true)) !!}
                    		{!! Form::file('photo') !!}
                    		{!! Form::token() !!}

                    	</div>
                    </div>
                    		<div style="width: 100%;text-align: right;padding: 15px;">
                    			<button class="btn btn-primary"><i class="fa fa-save"></i><b> Upload</b></button>
                    			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Repeat</button>
                    		</div>
        </div>

    @endsection