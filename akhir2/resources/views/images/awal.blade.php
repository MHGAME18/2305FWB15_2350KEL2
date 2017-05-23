@extends('content2')
@section('container2')
 <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>My Images</strong>
                <a href="{{ url('images') }}" class="btn btn-xs btn-primary pull-right">
                    <i class="fa fa-plus"></i> Add Image
                </a>
            </div>
            <div class="panel-body">
                @foreach ($images as $image)
                    <div class="col-sm-3">
                        <a href="" class="thumbnail">
                            <img src="uploads/{{ $image->nama_file }}" alt="">
                            <div class="caption">
                                {{ $image->title }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
			@endsection