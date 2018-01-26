@extends('layout.index')
@section('content')
<form class="form-horizontal" action="dangnhap" method="post" role="form">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

@if($errors->has('errorlogin'))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{$errors->first('errorlogin')}}
	</div>
@endif

  <div class="form-group">
  	<div  class="text-center mau_dangnhap" >
		<h1>ĐĂNG NHẬP</h1>
	</div>
    <label class="col-sm-4 control-label"><a class="glyphicon glyphicon-user"></a> Email</label>
    <div class="col-sm-5">
      <input type="text" name="email" class="form-control" placeholder="Nhập vào tên tài khoản (*)" required="Vui lòng nhập tài khoản">
      	@if($errors->has('email'))
			<p style="color:red">{{$errors->first('email')}}</p>
		@endif
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-4 control-label"><a class="glyphicon glyphicon-lock"></a> Mật khẩu</label>
    <div class="col-sm-5">
      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Nhập vào mật khẩu (*)" required="Vui lòng nhập mật khẩu">
      	@if($errors->has('password'))
			<p style="color:red">{{$errors->first('password')}}</p>
		@endif
    </div>
  </div>
  <div class="form-group ">
    <label for="inputPassword" class="col-sm-5 control-label"></label>
    <div class="col-sm-4 row">
	      <input type="submit" class="btn btn-primary form-center" name="login" value="Đăng nhập">
	      <input type="reset" class="btn btn-primary" name="reset" value="Đặt lại">
    </div>
  </div>
</form>
<br><br><br><br>
@endsection