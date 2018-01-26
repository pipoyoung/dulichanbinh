
@extends('admin.trangquantri')
@section('content')
<h1 class="canhgiua">THÊM KHÁCH HÀNG MỚI</h1>

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

<form class="form-horizontal" role="form" action="admin/users/them" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên khách hàng</label>
	    <div class="col-sm-6">
	      <input type="text" name="tenkh" class="form-control"  placeholder="Nguyễn Văn A">
	    </div>
   	</div>
 	<div class="form-group">
	    <label class="col-sm-3 control-label">Địa chỉ</label>
	    <div class="col-sm-6">
	      <input type="text" name="diachi" class="form-control"  placeholder="Cần Thơ">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Số điện thoại</label>
	    <div class="col-sm-6">
	      <input type="text" name="sdt" class="form-control"  placeholder="0909567891">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Email</label>
	    <div class="col-sm-6">
	      <input type="text" name="email" class="form-control"  placeholder="abc@gmail.com">
	    </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">Mật khẩu</label>
      <div class="col-sm-6">
        <input type="text" name="password" class="form-control"  placeholder="12345">
      </div>
   </div>
   <div class="form-group">
      <label class="col-sm-3 control-label">Quyền</label>
      <div class="col-sm-6">
        <select class="form-control" name="quyen">
          <option value="1">Admin</option>
          <option value="2">User</option>
        </select>
      </div>
    </div>
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-primary">Thêm</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection