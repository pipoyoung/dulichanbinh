
@extends('admin.trangquantri')
@section('content')
<h1 class="canhgiua">THÊM ĐIỂM THAM QUAN</h1>

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

<form class="form-horizontal" role="form" action="admin/diemthamquan/them" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên điểm</label>
	    <div class="col-sm-6">
	      <input type="text" name="tendiem" class="form-control"  placeholder="Vườn chôm chôm">
	    </div>
   	</div>
 	<div class="form-group">
	    <label class="col-sm-3 control-label">Địa chỉ</label>
	    <div class="col-sm-6">
	      <input type="text" name="diachi" class="form-control"  placeholder="Vĩnh Long">
	    </div>
   </div>
   
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-primary">Thêm</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection