@extends('admin.trangquantri')
@section('content')
<h1 class="qldl canhgiua">CẬP NHẬT TOUR</h1>
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


<form class="form-horizontal" action="admin/tours/sua/{{$tours->id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
  	<div class="form-group">
	    <label class="col-sm-3 control-label">Mã Tour</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control"  value="{{$tours->id}}" disabled="true">
	    </div>
   	</div>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên hướng dẫn viên</label>
	    <div class="col-sm-6">
	      <select class="form-control" name="HuongDanVien">
	      	@foreach($huongdanvien as $hdv)
	      		<option 
	      		@if($tours->mahdv == $hdv->id)
		      		{{"selected"}}
		      	@endif
	      		value="{{$hdv->id}}" ">{{$hdv->tenhdv}}</option>
	      	@endforeach
	      </select>
	    </div>
   	</div>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên Tour</label>
	    <div class="col-sm-6">
	      <input type="text" name="tentour" class="form-control"  value="{{$tours->tentour}}">
	    </div>
   	</div>
   	
 	<div class="form-group">
	    <label class="col-sm-3 control-label">Ngày bắt đầu</label>
	    <div class="col-sm-6">
	      <input name="ngaybatdau" type="text" class="form-control"  value="{{$tours->ngaybatdau}}">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Ngày kết thúc</label>
	    <div class="col-sm-6">
	      <input name="ngayketthuc" type="text" class="form-control"  value="{{$tours->ngayketthuc}}">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Giá</label>
	    <div class="col-sm-6">
	      <input name="gia" type="text" class="form-control"  value="{{$tours->gia}}">
	    </div>
   </div>
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-primary">Sửa</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection