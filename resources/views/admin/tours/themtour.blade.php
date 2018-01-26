
@extends('admin.trangquantri')
@section('content')
<h1 class="canhgiua">THÊM MỚI TOUR </h1>

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

<form class="form-horizontal" role="form" action="admin/tours/them" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
   	<div class="form-group">
	    <label class="col-sm-3 control-label">Tên Tour</label>
	    <div class="col-sm-6">
	      <input type="text" name="tentour" class="form-control"  placeholder="Tour ABC">
	    </div>
   	</div>
    <div class="form-group">
      <label class="col-sm-3 control-label">Tên hướng dẫn viên</label>
      <div class="col-sm-6">
        <select class="form-control" name="HuongDanVien">
          @foreach($huongdanvien as $hdv)
            <option value="{{$hdv->id}}">{{$hdv->tenhdv}}</option>
          @endforeach
        </select>
      </div>
    </div>
 	<div class="form-group">
	    <label class="col-sm-3 control-label">Ngày bắt đầu</label>
	    <div class="col-sm-6">
	      <input type="text" name="ngaybatdau" class="form-control"  placeholder="20/10/2017">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Ngày kết thúc</label>
	    <div class="col-sm-6">
	      <input type="text" name="ngayketthuc" class="form-control"  placeholder="20/11/2017">
	    </div>
   </div>
   <div class="form-group">
	    <label class="col-sm-3 control-label">Giá</label>
	    <div class="col-sm-6">
	      <input type="text" name="gia" class="form-control"  placeholder="1999000">
	    </div>
   </div>
    <div class="col-sm-offset-3 col-sm-6">
      <button type="submit" class="btn btn-primary">Thêm</button>
      <button type="reset" class="btn btn-primary" value="reset">Reset</button>
    </div>
</form>
@endsection