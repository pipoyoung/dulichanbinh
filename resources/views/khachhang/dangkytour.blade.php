@extends('layout.index')
@section('content')
<div class="content">
	<div class="jumbotron jum4">
		<h1>ĐĂNG KÝ TOUR DU LỊCH</h1>	
		<form action="dktour" method="post" role="form form-control">
			<div class="table-responsive">
			  <table class="table table_dk">
			    <tr class="active">
			    	<td class="col-md-2">
			    		<label class="form">Chọn Tour</label>
			    	</td>
			    	<td class="col-md-6">
						<select class="form-control" form="carform" name="Tours">
				          @foreach($tour as $t)
				            <option value="{{$t->id}}">{{$t->tentour}}</option>
				          @endforeach
				        </select>
					</td>
					<th rowspan="10"><img src="styles/img/02-9.jpg"></th>
			    <tr>
			    <tr class="active">
			    	<td class="col-md-2">
			    		<label class="form">Khách hàng</label>
			    	</td>
			    	<td class="col-md-6">
						<select class="form-control" form="carform" name="Tours">
				          @foreach($user as $u)
				            <option value="{{$u->id}}">{{$u->tenkh}}</option>
				          @endforeach
				        </select>
					</td>
			    <tr>
			    <tr class="active">
			    	<td>
			    		<label class="form">Số lượng</label>
			    	</td>
			    	<td>
			    		<input class="form-control" type="text" name="soluong">
					</td>
			    <tr>
			    <tr class="active">
			    	<td class="">
			    		
			    	</td>
			    	<td class="col-md-4">
			    		<input class="btn btn-success " type="submit" name="dangkytour" value="Đăng ký tour">
			    		<input class="btn btn-success " type="reset" name="reset" value="Đặt lại">
			    	</td>

			    <tr>
			  </table>
			</div>
			
		</form>
		
	</div>
</div><!--End Content-->
@endsection