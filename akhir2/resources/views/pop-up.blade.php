<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/css/bootstrap.min.css')}} ">
	<script type="text/javascript" href="{{asset('modal/jquery.min.js')}} "></script>
	<script type="text/javascript" href="{{asset('modal/bootstrap.min.js')}} "></script>
</head>
<body>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Klik</button>
<!-- Awal dari modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign In, please!</h4>
      </div>
      
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Password</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <a href="{{url("signup/daftar")}}" class="btn btn-primary">Sign Up</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="{{url("order/pesan")}}" class="btn btn-primary">Sign In</a>
      </div>
    </div>
  </div>
</div>

<!-- Akhir dari modal -->

</body>
</html>