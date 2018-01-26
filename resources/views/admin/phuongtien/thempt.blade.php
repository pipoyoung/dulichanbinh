
@extends('admin.trangquantri')
@section('content')
<h1 class="canhgiua">THÊM PHƯƠNG TIỆN</h1>

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

<form class="form-horizontal" role="form" action="admin/phuongtien/them" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên PT</label>
	    <div class="col-sm-6">
	      <input type="text" name="tenpt" class="form-control"  placeholder="Thuyền">
	    </div>
   	</div>
 	<div class="form-group">
	    <label class="col-sm-3 control-label">Loại PT</label>
	    <div class="col-sm-6">
	      <input type="text" name="loaipt" class="form-control"  placeholder="Đường bộ">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Số chỗ</label>
	    <div class="col-sm-6">
	      <input type="text" name="socho" class="form-control"  placeholder="10">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Hiện trạng</label>
	    <div class="col-sm-6">
	      <input type="text" name="hientrang" class="form-control"  placeholder="Đang sửa chữa">
	    </div>
   </div>
   
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-primary">Thêm</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection