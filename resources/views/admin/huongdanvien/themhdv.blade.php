
@extends('admin.trangquantri')
@section('content')
<h1 class="canhgiua">THÊM HƯỚNG DẪN VIÊN</h1>

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

<form class="form-horizontal" role="form" action="admin/huongdanvien/them" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên HDV</label>
	    <div class="col-sm-6">
	      <input type="text" name="tenhdv" class="form-control"  placeholder="Nguyễn Văn A">
	    </div>
   	</div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Giới tính</label>
      <div class="col-sm-6">
        <input type="text" name="phai" class="form-control"  placeholder="Nam hoặc Nữ">
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
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-primary">Thêm</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection