@extends('layout.index')
@section('content')
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            {{$err}}<br>
        @endforeach
    </div>
@endif

@if(session('thongbao'))
    <div class="alert alert-success">
        {{session('thongbao')}}
    </div>
@endif
<form class="form-horizontal" role="form" action="dangky" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="form-group">
  	<div  class="text-center mau_dangky" >
		<h1>ĐĂNG KÝ TÀI KHOẢN</h1>
	</div>
    <label class="col-sm-4 control-label"><a class="glyphicon glyphicon-user"></a> Tên KH</label>
    <div class="col-sm-5">
      <input type="text" name="tenkh" class="form-control" placeholder="Vui lòng nhập vào tên tài khoản (*)" required="Vui lòng nhập tài khoản">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-4 control-label"><a class="glyphicon glyphicon-envelope"></a> Email</label>
    <div class="col-sm-5">
      <input type="text" name="email" class="form-control" placeholder="Vui lòng nhập vào email (*)" required="Vui lòng nhập email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword" class="col-sm-4 control-label"><a class="glyphicon glyphicon-lock"></a> Mật khẩu</label>
    <div class="col-sm-5">
      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Vui lòng nhập vào mật khẩu (*)" required="Vui lòng nhập mật khẩu">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-4 control-label"><a class="glyphicon glyphicon-pencil"></a> Địa chỉ</label>
    <div class="col-sm-5">
      <input type="text" name="diachi" class="form-control" placeholder="Vui lòng nhập vào tên họ tên (*)" required="Vui lòng nhập họ tên">
    </div>
  </div>
  
  <div class="form-group">
    <label  class="col-sm-4 control-label"><a class="glyphicon glyphicon-earphone"></a> SĐT</label>
    <div class="col-sm-5">
      <input type="text" name="sdt" class="form-control" placeholder="Vui lòng nhập vào sdt (*)" required="Vui lòng nhập sdt">
    </div>
  </div>
  <div class="form-group ">
    <label for="inputPassword" class="col-sm-5 control-label"></label>
    <div class="col-sm-4 row">
	      <input type="submit" class="btn btn-success form-center" name="register" value="Đăng ký">
	      <input type="reset" class="btn btn-success" name="Reset" value="Đặt lại">
    </div>
  </div>
</form>
</div><br><br>
@endsection