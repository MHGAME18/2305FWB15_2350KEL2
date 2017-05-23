<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset:"UTF-8">
	<title>@yield('page_title','Halaman Awal') | Warnet Online</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/style.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/animate.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/responsive.css')}}" >
	<style type="text/css">
	<style type="text/css">

		.starter-template{
			padding: 40px 15px;
			text-align: center;
		}
		.form-horizontal{
			padding: 15px 10px;
		}
		/*.footer{
			padding-top: 15px;
			text-align: right;
		}*/
		#social {
	padding-top: 20px;
	padding-bottom: 20px;
	background-color: #f2f2f2;
}

#social i {
	font-size: 40px;
	color: #4a4a4a
}

#social i:hover {
	color: #1abc9c
}

#footerwrap {
	padding-top: 30px;
	padding-bottom: 50px;
	background-color: #2f2f2f;
}

#footerwrap p {
	color: #f2f2f2;
	margin-left: 10px;
}

	</style>
	</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" 
				aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{url('/')}}">Home</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="treeview">
          		<a href="#">
            	 <span>Pengetikan & Editing Photo</span>
          		</a>
          		<ul class="treeview-menu">
            		<li><a href="{{url('upload/awal')}}">Download <span class="sr-only">(current)</span></a></li>
            		<li><a href="{{url('upload')}}">Upload <span class="sr-only">(current)</span></a></li>
         		</ul>
        		</li>
				<li><a href="{{url('info')}} ">Info Warnet<span class="sr-only">(current)</span></a></li>
				
				<li><a href="{{url('about')}} ">About <span class="sr-only">(current)</span></a></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ url('logout')}}"><span><i class="fa fa-sign-out"></i>Logout</span></a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	@if (Session::has('informasi'))
	<div class="alert alert-info">
		<strong>Informasi : </strong>
		{{Session::get('informasi')}}
	</div>
	@endif
	@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	@yield('container2')
	</div>

<nav class="navbar navbar-default navbar-fixed-bottom">
  <footer class="main-footer">
    <div class="footerwrap">
    <strong>Copyright &copy; 2017  <i class="fa fa-instagram"></i> <a href="https://www.instagram.com/mulawarmannet/">@MulawarmanNet</a>.</strong>
     </div>
  </footer>
	</nav>
<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
	$(function () {
		$('[data-toggle="tootlip()"]'
	});
</script>
</body>
</html>