@extends('admin.trangquantri')
@section('content')
<h1 class="qldl canhgiua">Cập nhật thông tin HDV</h1>
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


<form class="form-horizontal" action="admin/huongdanvien/sua/{{$hdv->id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
  	<div class="form-group">
	    <label class="col-sm-3 control-label">Mã HDV</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control"  value="{{$hdv->id}}" disabled="true">
	    </div>
   	</div>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên HDV</label>
	    <div class="col-sm-6">
	      <input type="text" name="tenhdv" class="form-control"  value="{{$hdv->tenhdv}}">
	    </div>
   	</div>
   	
 	<div class="form-group">
	    <label class="col-sm-3 control-label">Địa chỉ</label>
	    <div class="col-sm-6">
	      <input name="diachi" type="text" class="form-control"  value="{{$hdv->diachi}}">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">SDT</label>
	    <div class="col-sm-6">
	      <input name="sdt" type="text" class="form-control"  value="{{$hdv->sdt}}">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Giới tính</label>
	    <div class="col-sm-6">
	      <input name="phai" type="text" class="form-control"  value="{{$hdv->phai}}">
	    </div>
   </div>
   
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-primary">Sửa</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection