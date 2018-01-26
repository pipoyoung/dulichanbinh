@extends('layout.index')
@section('content')
<div class="content">
	</div>
	<div class="jumbotron jum2">
		<h1 class="text-center"><span class="glyphicon glyphicon-stats"></span> Du lịch miền tây</h1>
	</div>
	<!-- <div id="slideshow">
		<div><img src="styles/img/Banner.jpg"></div>
		<div><img src="styles/img/b.jpg"></div>
	</div> -->
	<div class="row" style="background-color: #D2D7D3" align="center">
		<div class="col-md-3" >
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Chợ nổi Cái Răng</h3><br><img src="styles/img/floating-market-in-can-tho.jpg"><br><br>
			<p class="text-justify">Chợ Nổi Cái Răng - là 1 trong 3 chợ nổi nổi tiếng nhất tại miền Tây Nam Bộ với nét văn hóa rất đặc trưng thể hiện sinh hoạt cuộc sống thường ngày của người dân vùng Đồng bằng Sông Cửu Long. Nét độc đáo và đặc điểm chính của chợ nổi Cái Răng là chuyên buôn bán các loại trái cây, đặc sản của vùng đồng bằng sông Cửu Long. </p><button class="btn btn-primary">Chi tiết</button>
		</div>
		<div class="col-md-3">
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Thiền Viện Trúc Lâm PN</h3><img src="styles/img/thien-vien-truc-lam-phuong-nam.jpg">
			<br><br>
			<p class="text-justify">Thiền viện Trúc Lâm Phương Nam được xem là một trong những công trình nghệ thuật độc đáo nhất của xứ Tây Đô. Trên mảnh đất của thành phố Cần Thơ, vốn là trung tâm của vùng đồng bằng sông Cửu Long, Thiền viện chính là nơi mang giá trị văn hóa tâm linh vô cùng ý nghĩa.</p><button class="btn btn-success">Chi tiết</button>
		</div>
		<div class="col-md-3">
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Bến Ninh Kiều - Cần Thơ</h3><img src="styles/img/ninh-kieu-wharf.jpg">
			<br><br>
			<p class="text-justify">Bến Ninh Kiều là một địa danh du lịch có từ lâu và hấp dẫn du khách bởi phong cảnh sông nước hữu tình và vị trí thuận lợi nhìn ra dòng sông Hậu. Từ lâu bến Ninh Kiều đã trở thành biểu tượng về nét đẹp thơ mộng bên bờ sông Hậu của cả Thành phố Cần Thơ, thu hút nhiều du khách đến tham quan.</p><button class="btn btn-danger">Chi tiết</button>
		</div>
		<div class="col-md-3">
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Vườn quốc gia Tràm Chim, Đồng Tháp</h3><img src="styles/img/du-lich-mien-tay-cam-nang-tu-a-den-z-ivivu-13.jpg">
			<br><br>
			<p class="text-justify">Hàng năm mỗi khi con nước tràn về, Tràm Chim lại khoác lên mình tấm áo mới đầy sắc màu cùng vũ điệu rực rỡ của thiên nhiên. Thay vì chọn lúc bình minh như đại đa số, bạn có thể bắt đầu hành trình khám phá vào lúc buổi chiều để tận hưởng những khung cảnh tuyệt diệu.</p><button class="btn btn-success">Chi tiết</button>
		</div>
	</div>
	<div class="jumbotron jum3">
		<h1 class="text-center"><span class="glyphicon glyphicon-usd"></span> Bảng giá trò chơi</h1>
	</div>
	<div class="table-responsive">
	  <table class="table table-bordered table-hover table-condensed">
	  	<tr class="danger text-center">
		  <td ><b>STT</b></td>
		  <td ><b>Tên trò chơi</b></td>
		  <td ><b>Đơn giá</b></td>
		  <td ><b>Ghi chú</b></td>
		</tr>
		<tr class="active">
		  <td class="text-center">1</td>
		  <td >Đá Gà Nghệ Thuật</td>
		  <td >Miễn phí </td>
		  <td >Thứ 6, thứ 7 , chủ nhật hàng tuần và các ngày lễ tết<br>Từ 13 giờ 30 phút đến 15 giờ mỗi ngày      <b>MỚI</b></td>
		</tr>
		<tr class="success">
		  <td class="text-center">2</td>
		  <td >Bóng nước</td>
		  <td >30.000 đ/ vé/ khách </td>
		  <td >Thứ 6, thứ 7 , chủ nhật hàng tuần và các ngày lễ tết<br>Từ 13 giờ 30 phút đến 15 giờ mỗi ngày       <b>MỚI</b></td>
		</tr>
		<tr class="warning">
		  <td class="text-center">3</td>
		  <td >Vòng xoay vũ trụ</td>
		  <td >Miễn phí </td>
		  <td >Mỗi vé đi được 1 khách/ 1 ghế   <b>MỚI</b></td>
		</tr>
		<tr class="info">
		  <td class="text-center">4</td>
		  <td >Cá bú bình sữa</td>
		  <td >5.000 đ/ bình </td>
		  <td ><b>MỚI</b></td>
		</tr>
		<tr class="primary">
		  <td class="text-center">5</td>
		  <td >Cưỡi đà điểu</td>
		  <td >25.000 đ/ vé/ khách </td>
		  <td >Một vòng sân cưỡi đà điểu</b></td>
		</tr>
		<tr class="active">
		  <td class="text-center">6</td>
		  <td >Trượt cỏ</td>
		  <td >30.000 đ/ 2 lượt/ 1 xe</td>
		  <td >Mỗi xe đi được 2 khách</td>
		</tr>
		<tr class="success">
		  <td class="text-center">7</td>
		  <td >Câu cá sấu</td>
		  <td >5.000 đ/ vé/ khách</td>
		  <td > 	Một lần câu</td>
		</tr>
		<tr class="warning">
		  <td class="text-center">8</td>
		  <td >TÁT ao BẮT cá</td>
		  <td >05 khách đầu tiên : 999.000 đ/ 05 khách<br>Thêm 01 khách cộng thêm 159.000đ/khách<br>Đặc biệt : Đoàn 20 khách trở lên giảm còn 159.000đ / khách</td>
		  <td >Bao gồm:
		  		<ul>
				    <li>Quần áo bà ba, dụng cụ TÁT ao BẮT cá ( gào dây, nôm, rổ, giỏ…)</li>
				    <li>Các loại cá đồng, củi , lửa, rượu nếp Vinh Sang</li>
				    <li>Bánh tráng, bún, nước chấm, rau sống, khóm</li>
				    <li>Nằm võng thư giãn bên nhà vườn + chụp ảnh lưu niệm</li>
				    <li>Hướng dẫn viên ( nhiệt tình ,vui vẻ )</li>
				    <li>Tàu đưa đón qua sông ( tàu lớn, áo phao đầy đủ )</li>
				    <li>Vé vào cổng Khu Du Lịch Vinh Sang</li>
				    <li>Quà tặng mang về : Khăn rằn truyền thống</li>
				 </ul>
			</td>
		</tr>
		<tr class="info">
		  <td class="text-center">9</td>
		  <td >Tắm sông – trượt nước</td>
		  <td >15.000 đ/ vé/ khách </td>
		  <td >Có áo phao, không hạn chế thời gian</td>
		</tr>
		<tr class="primary">
		  <td class="text-center">10</td>
		  <td >Xe điện đụng</td>
		  <td >20.000 đ/ vé/ 1 khách<br>(7 phút)/ 1 chiếc</td>
		  <td >Mỗi vé đi được 1 khách với thời gian là 5 phút</td>
		</tr>
		<tr class="active">
		  <td class="text-center">11</td>
		  <td >Trượt cỏ</td>
		  <td >30.000 đ/ 2 lượt/ 1 xe</td>
		  <td >Mỗi xe đi được 2 khách</td>
		</tr>
	  </table>
	  <p><b>Lưu ý:</b><i> Giá trên chưa bao gồm thuế.</i></p>
	</div>
	<div class="jumbotron jum4">
		<h1 class="text-center"><span class="glyphicon glyphicon-earphone"></span> Liên hệ</h1>
	</div>
	<div class="row">
		<div class="table-responsive col-md-6">
		<form action="" method="">
			<table class="table table-condensed ">
				<tr>
					<td><span class="glyphicon glyphicon-pencil"></span> Tên <input class="form-control" type="text" name="txtname" placeholder=""></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-pencil"></span> Số điện thoại<input class="form-control" type="text" name="txtname" placeholder=""></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-pencil"></span> Email <input class="form-control" type="text" name="txtname" placeholder=""></td>
				</tr>
				<tr align="center">
					<td><textarea  	rows="5" cols="55">Nội dung</textarea></td>
				</tr>
				<tr align="center">
					<td><button class="btn btn-primary">Gửi tin nhắn</button></td>
				</tr>
			</table>
		</div>
		<div class="table-responsive col-md-6">
			<img class="img-responsive" src="styles/img/lienhe.png">
		</div>
		</form>
	</div>
</div><!--End Content-->
@endsection