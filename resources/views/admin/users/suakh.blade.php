@extends('admin.trangquantri')
@section('content')
<h1 class="qldl canhgiua">CẬP NHẬT KHÁCH HÀNG</h1>
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


<form class="form-horizontal" action="admin/users/sua/{{$user->id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
  	<div class="form-group">
	    <label class="col-sm-3 control-label">Mã KH</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control"  value="{{$user->id}}" disabled="true">
	    </div>
   	</div>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên KH</label>
	    <div class="col-sm-6">
	      <input type="text" name="tenkh" class="form-control"  value="{{$user->tenkh}}">
	    </div>
   	</div>
   	
 	<div class="form-group">
	    <label class="col-sm-3 control-label">Địa chỉ</label>
	    <div class="col-sm-6">
	      <input name="diachi" type="text" class="form-control"  value="{{$user->diachi}}">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">SDT</label>
	    <div class="col-sm-6">
	      <input name="sdt" type="text" class="form-control"  value="{{$user->sdt}}">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Email</label>
	    <div class="col-sm-6">
	      <input name="email" type="text" class="form-control"  value="{{$user->email}}">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Mật khẩu</label>
	    <div class="col-sm-6">
	      <input name="password" type="text" class="form-control"  value="{{$user->password}}">
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
      <button type="submit" class="btn btn-primary">Sửa</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection