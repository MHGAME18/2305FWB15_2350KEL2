<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('page_title','Halaman Admin') | Warnet Online</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/custom.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/animate.css')}}" >
	<style type="text/css">
			.starter-template{
			padding: 40px 15px;
			text-align: center;
		}
		.form-horizontal{
			padding: 15px 10px;
		}
	</style>
</head>
<body>

<div class="container-fluid display-table">
	<div class="row display-table-row">
		<!-- Menu samping -->
		<div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="menu-samping">
			<h1 class="hidden-xs hidden-sm">Warnet Online</h1>
			<ul class="animated bounceInLeft">
				<li class="link active">
					<a href="{{ url('admin') }}">
						<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Home</span>
					</a>
				</li>
				<li class="link" id="setting">
					<a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Setting</span>
					</a>
					<ul class="collapse collapseable" id="collapse-post">
						<li><a href="{{ url('admin/awal') }}" id="prosesRegistrasi"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="hidden-sm hidden-xs">User</span></a></li>
						<li><a href="{{ url('admin/member/awal') }}" id="dataRegistrasi"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span class="hidden-sm hidden-xs">Setting Data Member</span></a></li>
						<li><a href="{{ url('admin/doperator/awal') }}" id="dataRegistrasi"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span class="hidden-sm hidden-xs">Setting Data Doperator</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- Content Utama -->
		<div class="col-md-10 col-sm-11 display-table-cell valign-top">
			<div class="row">
				<header id="nav-header" class="clearfix">
					<div class="col-md-5">
					<nav class="navbar-default pull-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#menu-samping">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</nav>
						<p id="header-search-field"><strong>ADMIN ROOM</strong></p>
					</div>
					<div class="col-md-7">
						<ul class="pull-right">
							<li id="welcome" class="hidden-xs"><a href="{{ url('/')}}">
									Go to Web
								</a></li>
							<li>
								<a href="{{ url('logout')}}">
									<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
									Logout
								</a>
							</li>
						</ul>
					</div>
				</header>
			</div>
			  <div class="col-md-12">
              <div class="col-md-12 animated fadeIn" id="isicontent">
              @yield('container')
                
              </div>
            </div>
		<!-- Footer -->
		<div class="row">
			<footer id="footerr" class="clearfix">
				<div class="pull-left"><b>Copyright </b>&copy; 2017</div>
				
			</footer>
		</div>
		</div>
	</div>
</div>
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('component/jquery/dist/.js') }}"></script>
<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
	$(function () {
		$('[data-toggle="tootlip()"]'
	});
</script>
</body>
</html>