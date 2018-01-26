@extends('admin.trangquantri')
@section('content')
<h1 class="qldl canhgiua">CẬP NHẬT PHƯƠNG TIỆN</h1>
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


<form class="form-horizontal" action="admin/phuongtien/sua/{{$phuongtien->id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
  	<div class="form-group">
	    <label class="col-sm-3 control-label">Mã PT</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control"  value="{{$phuongtien->id}}" disabled="true">
	    </div>
   	</div>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên PT</label>
	    <div class="col-sm-6">
	      <input type="text" name="tenpt" class="form-control"  value="{{$phuongtien->tenpt}}">
	    </div>
   	</div>
   	
 	<div class="form-group">
	    <label class="col-sm-3 control-label">Loại PT </label>
	    <div class="col-sm-6">
	      <input name="loaipt" type="text" class="form-control"  value="{{$phuongtien->loaipt}}">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Số chỗ</label>
	    <div class="col-sm-6">
	      <input name="socho" type="text" class="form-control"  value="{{$phuongtien->socho}}">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Hiện trạng</label>
	    <div class="col-sm-6">
	      <input name="hientrang" type="text" class="form-control"  value="{{$phuongtien->hientrang}}">
	    </div>
   </div>
   
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-primary">Sửa</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection