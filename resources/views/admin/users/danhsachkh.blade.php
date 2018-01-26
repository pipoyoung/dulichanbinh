@extends('admin.trangquantri')

@section('content')
<h1 class="canhgiua">DANH SÁCH KHÁCH HÀNG</h1>

	<div class="table-responsive">

		@if(session('thongbao'))
            <div class="alert alert-success">
            {{session('thongbao')}}
            </div>
        @endif

		<table class="table " border="1">
		  <tr class="tbl_title">
		  	<td>Mã KH</td>
		  	<td>Tên KH</td>
		  	<td>Địa chỉ</td>
		  	<td>Số điện thoại</td>
		  	<td>Quyền</td>
		  	<td>Email</td>
		  	<td>Sửa</td>
		  	<td>Xóa</td>
		  </tr>
		  @foreach($user as $u)
		  @if($u->quyen == "1")
                <?php 
                	$q="admin";
                	//echo $q; 
                ?>
          @else
                <?php 
                	$q="user";
                	//echo $q; 
                ?>
          @endif
		  <tr>
		  	<td>{{$u->id}}</td>
		  	<td>{{$u->tenkh}}</td>
		  	<td>{{$u->diachi}}</td>
		  	<td>{{$u->sdt}}</td>
		  	<td>{{$q}}</td>
		  	<td>{{$u->email}}</td>
            <td><a href="admin/users/sua/{{$u->id}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="admin/users/xoa/{{$u->id}}"><span class="glyphicon glyphicon-remove"></a></td>
		  </tr> 
		  @endforeach
		</table>
	</div>
	{!!$user->links()!!}
@endsection