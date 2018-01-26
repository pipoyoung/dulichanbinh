@extends('admin.trangquantri')

@section('content')
<h1 class="canhgiua">DANH SÁCH PHƯƠNG TIỆN</h1>

	<div class="table-responsive">

		@if(session('thongbao'))
            <div class="alert alert-success">
            {{session('thongbao')}}
            </div>
        @endif

		<table class="table " border="1">
		  <tr class="tbl_title">
		  	<td>Mã PT</td>
		  	<td>Tên PT</td>
		  	<td>Loại PT</td>
		  	<td>Số chỗ</td>
		  	<td>Hiện trạng</td>
		  	<td>Sửa</td>
		  	<td>Xóa</td>
		  </tr>
		  @foreach($phuongtien as $pt)
		  <tr>
		  	<td>{{$pt->id}}</td>
		  	<td>{{$pt->tenpt}}</td>
		  	<td>{{$pt->loaipt}}</td>
		  	<td>{{$pt->socho}}</td>
		  	<td>{{$pt->hientrang}}</td>
            <td><a href="admin/phuongtien/sua/{{$pt->id}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="admin/phuongtien/xoa/{{$pt->id}}"><span class="glyphicon glyphicon-remove"></a></td>
		  </tr> 
		  @endforeach
		</table>
	</div>
{!!$phuongtien->links()!!}
@endsection