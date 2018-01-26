@extends('admin.trangquantri')

@section('content')
<h1 class="canhgiua">DANH SÁCH HƯỚNG DẪN VIÊN DU LỊCH</h1>

	<div class="table-responsive">

		@if(session('thongbao'))
            <div class="alert alert-success">
            {{session('thongbao')}}
            </div>
        @endif

		<table class="table " border="1">
		  <tr class="tbl_title">
		  	<td>Mã HDV</td>
		  	<td>Tên HDV</td>
		  	<td>Phái</td>
		  	<td>Địa chỉ</td>
		  	<td>Số điện thoại</td>
		  	<td>Sửa</td>
		  	<td>Xóa</td>
		  </tr>
		  @foreach($hdv as $h)
		  <tr>
		  	<td>{{$h->id}}</td>
		  	<td>{{$h->tenhdv}}</td>
			<td>{{$h->phai}}</td>
		  	<td>{{$h->diachi}}</td>
		  	<td>{{$h->sdt}}</td>
            <td><a href="admin/huongdanvien/sua/{{$h->id}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="admin/huongdanvien/xoa/{{$h->id}}"><span class="glyphicon glyphicon-remove"></a></td>
		  </tr> 
		  @endforeach
		</table>
	</div>
	{!!$hdv->links()!!}
@endsection