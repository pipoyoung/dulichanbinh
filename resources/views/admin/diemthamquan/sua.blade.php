@extends('admin.trangquantri')
@section('content')
<h1 class="qldl canhgiua">CẬP NHẬT ĐIỂM THAM QUAN</h1>
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


<form class="form-horizontal" action="admin/diemthamquan/sua/{{$diemthamquan->id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
  	<div class="form-group">
	    <label class="col-sm-3 control-label">Mã điểm</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control"  value="{{$diemthamquan->id}}" disabled="true">
	    </div>
   	</div>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên điểm</label>
	    <div class="col-sm-6">
	      <input type="text" name="tendiem" class="form-control"  value="{{$diemthamquan->tendiem}}">
	    </div>
   	</div>
   	
 	<div class="form-group">
	    <label class="col-sm-3 control-label">Địa chỉ</label>
	    <div class="col-sm-6">
	      <input name="diachi" type="text" class="form-control"  value="{{$diemthamquan->diachi}}">
	    </div>
   </div>
   
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-primary">Sửa</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection