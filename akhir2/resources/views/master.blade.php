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

	<!-- modal -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('modal/bootstrap.min.css')}}" > -->
	<!-- end modal -->
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

		#headerwrap {
	background: url('component/1.jpg') no-repeat center top;
	margin-top: -70px;
	padding-top: 250px;
	text-align:center;
	background-attachment: relative;
	background-position: center center;
	min-height: 650px;
	width: 100%;
	
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

#headerwrap h2 {
	color:#ffffff;
	padding-top: 10px;
	padding-bottom: 20px;
	letter-spacing: 4px;
	font-size: 70px;
	font-weight: bold;
}

#headerwrap h4 {
	font-weight: 400;
	color: #ffffff
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
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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


			<!-- <form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form> -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ url('logout')}}"><span><i class="fa fa-sign-out"></i>Logout</span></a></li>
			</ul>
		</div>
	</div>
</nav>
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 animated fadeIn">
					<h4>Selamat Datang Di Website</h4>
					<h2>Mulawarman Net</h2>
					<h4>Warnet Online</h4>
				</div>
			</div><!--/row -->
	    </div> <!-- /container -->
	</div><!--/headerwrap -->


  <footer class="main-footer">
    <div class="footerwrap">
    <strong>Copyright &copy; 2017  <i class="fa fa-instagram"></i> <a href="https://www.instagram.com/mulawarmannet/">@MulawarmanNet</a>.</strong>
     </div>
  </footer>
<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>
</html>