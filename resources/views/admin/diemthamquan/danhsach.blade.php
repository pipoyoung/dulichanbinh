@extends('admin.trangquantri')

@section('content')
<h1 class="canhgiua">DANH SÁCH ĐỊA ĐIỂM THAM QUAN</h1>

	<div class="table-responsive">

		@if(session('thongbao'))
            <div class="alert alert-success">
            {{session('thongbao')}}
            </div>
        @endif

		<table class="table " border="1">
		  <tr class="tbl_title">
		  	<td>Mã điểm</td>
		  	<td>Tên điểm</td>
		  	<td>Địa chỉ</td>
		  	<td>Sửa</td>
		  	<td>Xóa</td>
		  </tr>
		  @foreach($diemthamquan as $dtq)
		  <tr>
		  	<td>{{$dtq->id}}</td>
		  	<td>{{$dtq->tendiem}}</td>
		  	<td>{{$dtq->diachi}}</td>
            <td><a href="admin/diemthamquan/sua/{{$dtq->id}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="admin/diemthamquan/xoa/{{$dtq->id}}"><span class="glyphicon glyphicon-remove"></a></td>
		  </tr> 
		  @endforeach
		</table>
	</div>
{!!$diemthamquan->links()!!}
@endsection