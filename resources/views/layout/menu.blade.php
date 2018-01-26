<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Du Lịch An Bình</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="{{ url('/trangchu') }}"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
	        <li><a href="{{ url('/gioithieu') }}"><span class="glyphicon glyphicon-th-list"></span> Giới thiệu</a></li>
	        <li>
	          <a href="{{ url('/hinhanh') }}"><span class="glyphicon glyphicon-book"></span> Thư viện ảnh <!-- <span class="caret"></span> --></a>
	        </li>
	        <li><a href="{{ url('/tourdulich') }}"><span class="glyphicon glyphicon-map-marker"></span> Tour du lịch</a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search" action="timkiem" method="get">
	      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	        <div class="form-group">
	          <input type="text" name="tukhoa" class="form-control" placeholder="Nhập vào từ khóa">
	        </div>
	        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="{{ url('/dangky') }}"><span class="glyphicon glyphicon-pencil"></span> Đăng ký</a></li>
	        <li><a href="{{ route('getLogin') }}"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
	        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>