<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Trang Admin</title>
  	<!-- <base href="{{asset('')}}"> -->
  	<!-- CDN cho CSS và JavaScript của Bootstrap>
  	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="styles/css/style.css">
	<link rel="stylesheet" type="text/css" href="styles/css/style_admin.css">
	<!--script -->
	<script type="text/javascript" sr="styles/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="styles/js/my.js"></script>

  	<!-- <link rel="stylesheet" href="http://thecodeplayer.com/uploads/fonts/fontawesome/css/font-awesome.min.css"> -->
  	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nunito">
  	<link rel="stylesheet" href="https://fonts.googleapis.com css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  	

  	<style type="text/css">
  		
  	</style>
  	
</head>

<body>
<div class="container">
	<div class="head">
	<div class="row">
		<div class="col-sm-5"><h2 class="qldl">QUẢN LÝ DU LỊCH</h2></div>
		<div class="col-sm-4">
			<form class="form-wrapper" style="float: right;" action="" method="get">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			    <input type="text" name="tukhoa" id="search" placeholder="Từ khóa tìm kiếm..." required>
			    <input type="submit" value="Go" id="submit">
			</form>
		</div>
		<div class="col-sm-3 menudrop">
	      	<ul class="nav navbar-nav" style="float: right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style=" color: white;
background-color: #1E282C;float: right"><span class="glyphicon glyphicon-user"></span> Admin <span class="caret"></span></a>
	          <ul class="dropdown-menu sub-menu" style="color: white;background-color: none;">
	            <li><a href="#">Thoát</a></li>
	          </ul>
	        </li>
	      	</ul>
    	
    	</div>
		<!-- <div class="col-md-1"></div> -->
	</div>
</div>

	<div class="row">
		<div class="col-md-3">
			<div id="accordian">
				<ul>
					<li>
						<h3><i class="fa fa-users"></i>Khách hàng</h3>
						<ul>
							<li><a href="admin/users/{{('danhsach') }}"><i class="fa fa-bars"></i>Danh sách KH</a></li>
							<li><a href="admin/users/{{('them') }}"><i class="fa fa-user-plus"></i>Thêm KH mới</a></li>
						</ul>
					</li>
					<!-- we will keep this LI open by default -->
					<li >
						<h3><i class="fa fa-paper-plane-o"></i>Quản lý Tours</h3>
						<ul>
							<li><a href="admin/tours/{{('danhsach')}}"><i class="fa fa-bars"></i>Danh sách tour</a></li>
							<li><a href="admin/tours/{{('them')}}"><i class="fa fa-pencil"></i>Thêm Tour</a></li>
						</ul>
					</li>
					<li>
						<h3><i class="fa fa-map-pin"></i>Quản lý điểm DL</h3>
						<ul>
							<li><a href="admin/diemthamquan/{{('danhsach') }}"><i class="fa fa-pencil"></i>Cập nhật thông tin</a></li>
							<li><a href="admin/diemthamquan/{{('them') }}"><i class="fa fa-plus-square"></i>Thêm điểm DL</a></li>
						</ul>
					</li>
					<li>
						<h3><i class="fa fa-car"></i></span>Quản lý PT</h3>
						<ul>
							<li><a href="admin/phuongtien/{{('danhsach') }}"><i class="fa fa-bars"></i>Danh sách PT</a></li>
							<li><a href="admin/phuongtien/{{('them') }}"><i class="fa fa-pencil-square"></i>Thêm PT mới</a></li>
						</ul>
					</li>
					<li>
						<h3><i class="fa fa-street-view"></i></span>Quản lý HDV</h3>
						<ul>
							<li><a href="admin/huongdanvien/{{('danhsach') }}"><i class="fa fa-bars"></i>Danh sách HDV</a></li>
							<li><a href="admin/huongdanvien/{{('them') }}"><i class="fa fa-plus-square"></i>Thêm HDV mới</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- NOI DUNG-->
		<div class="col-md-9">
			@yield('content')
		</div>
		

	</div>
	
</div>
	<!-- prefix free to deal with vendor prefixes -->
	<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>

	<!-- jQuery -->
	<script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		/*jQuery time*/
	$(document).ready(function(){
		$("#accordian h3").click(function(){
			//slide up all the link lists
			$("#accordian ul ul").slideUp();
			//slide down the link list below the h3 clicked - only if its closed
			if(!$(this).next().is(":visible"))
			{
				$(this).next().slideDown();
			}
		})
	})
	</script>
</body>
</html>