@extends('admin.trangquantri')

@section('content')
<h1 class="canhgiua">DANH SÁCH TOUR</h1>

	<div class="table-responsive">

		@if(session('thongbao'))
            <div class="alert alert-success">
            {{session('thongbao')}}
            </div>
        @endif

		<table class="table " border="1">
		  <tr class="tbl_title">
		  	<td>Mã tour</td>
		  	<td>Tên tour</td>
		  	<td>Mã HDV</td>
		  	<td>Ngày bắt đầu</td>
		  	<td>Ngày kết thúc</td>
		  	<td>Giá</td>
		  	<th>Sửa</th>
            <th>Xóa</th>
		  </tr>
		  @foreach($tours as $t)
		  <tr>
		  	<td>{{$t->id}}</td>
		  	<td>{{$t->tentour}}</td>
		  	<td>{{$t->mahdv}}</td>
		  	<td>{{$t->ngaybatdau}}</td>
		  	<td>{{$t->ngayketthuc}}</td>
		  	<td>{{$t->gia}}</td>
            <td><a href="admin/tours/sua/{{$t->id}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="admin/tours/xoa/{{$t->id}}"><span class="glyphicon glyphicon-remove"></a></td>
		  </tr> 
		  @endforeach
		</table>
	</div>
{!!$tours->links()!!}
@endsection