@extends('layout.index')
@section('content')
<div class="content">			
	<div class="jumbotron jum1">
		<h1 class="text-center"><span class="glyphicon glyphicon-stats"></span> Một số Tour du lịch</h1>
	</div>
	<div class="row" style="background-color: #D2D7D3; padding-top: 5px;padding-bottom: 10px;" align="center">
		<div class="col-md-4" >
			<img src="styles/img/batoc.jpg" class="img-responsive img-thumbnail" alt="Responsive image">
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Tour mò cua bắt ốc</h3>
			<p class="text-justify">Tham gia chương trình “ Mò Cua Bắt Ốc “ – quý khách sẽ được hòa mình với thiên nhiên và trở về với tuổi thơ với những ngày lặn lội ngoài đồng bắt từng con cua, con ốc chắc chắn sẽ là một trải nghiệm khó quên</p>
			<hr>
			<h3 style="color: #296192">Giá: 259000/Người</h3>
			<hr>
			<button type="button" class="btn btn-primary" onclick="chuyentrang()">Đặt tour</button>
		</div>
		<div class="col-md-4">
			<img src="styles/img/baotang.jpg" class="img-responsive img-thumbnail" alt="Responsive image">
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Tour tham quan bảo tàng, nhà cổ</h3>
			<p class="text-justify">Nơi lưu giữ nhiều chứng tích lịch sử cách mạng, truyền thống văn hóa của dân tộc ta qua các thời kỳ tọa lạc tại khu trung tâm phố chợ, trước dòng sông Cổ Chiên lịch sử. Với một khuôn viên thoáng mát, xanh màu cây cổ thụ, phù hợp, hòa vào thiên nhiên, Nhà cổ nơi thời tự Quốc Tổ Hùng Vương, Nhà trưng bày văn hóa các dân tộc và lịch sử tự nhiên, Nhà trưng bày truyền thống lịch sử – cách mạng, Nhà trưng bày chuyên đề.</p>
			<hr>
			<h3 style="color: #296192">Giá: 229000/Người</h3>
			<hr>
			<button type="button" class="btn btn-success" onclick="chuyentrang()">Đặt tour</button>
		</div>
		<div class="col-md-4">
			<img src="styles/img/nongdan.jpg" class="img-responsive img-thumbnail" alt="Responsive image">
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Tour một ngày làm nông dân</h3>
			<p class="text-justify">Đến với khu du lịch Vinh Sang, quý khách sẽ hóa thân thành người nông dân đích thực trong chiếc áo bà ba – trang phục đặc trưng của người miền Tây Nam Bộ mà từ lâu đã gắn liền với con người nơi đây. Sau đó, đoàn chụp hình lưu niệm, hướng dẫn sẽ đưa quý khách đến điểm TÁT ao BẮT cá tại vườn nhà dân.</p>
			<hr>
			<h3 style="color: #296192">Giá: 299000/Người</h3>
			<hr><button class="btn btn-danger" onclick="chuyentrang()">Đặt tour</button>
		</div>
	</div>
	<div class="row" style="background-color: #D2D7D3; padding-top: 5px; padding-bottom: 10px;" align="center">
		<div class="col-md-4" >
			<img src="styles/img/vuonchomchom.jpg" class="img-responsive img-thumbnail" alt="Responsive image">
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Tour vườn Chôm chôm – Trọn gói 1 ngày</h3>
			<p class="text-justify">Sau khi len lỏi qua những kênh rạch chằng chịt, những rặng bần xanh ươm, lục bình chen chút của vùng sông nước, quý du khách cũng đến với vườn chôm chôm: Quý khách vào vườn sẽ bất ngờ với vườn chôm chôm bạt ngàn trĩu quả đủ màu sắc, tự tay hái trái chín mọng trên cây và thưởng thức ngay tại vườn </p>
			<hr>
			<h3 style="color: #296192">Giá: 269000/Người</h3>
			<hr>
			<button class="btn btn-primary" onclick="chuyentrang()">Đặt tour</button>
		</div>
		<div class="col-md-4">
			<img src="styles/img/vuonvusua.jpg" class="img-responsive img-thumbnail" alt="Responsive image">
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Tour Vườn vú sữa</h3>
			<p class="text-justify">Du lịch sinh thái là loại hình du lịch rất được ưa chuộng đối với du khách trong và ngoài nước. Vĩnh Long là vùng đất được thiên nhiên dành tặng cho những thuận lợi để có thể phát triển loại hình du lịch này. Cù lao An Bình ở Vĩnh Long là điểm du lịch sinh thái rất nổi tiếng với những nhà vườn, đến đây du khách được tự tay hái những trái vú sữa chín và thưởng thức.</p>
			<hr>
			<h3 style="color: #296192">Giá: 269000/Người</h3>
			<hr>
			<button class="btn btn-success" onclick="chuyentrang()">Đặt tour</button>
		</div>
		<div class="col-md-4">
			<img src="styles/img/doi.jpg" class="img-responsive img-thumbnail" alt="Responsive image">
			<h3 class="text-left" style="color: #296192"><span class="glyphicon glyphicon-map-marker"></span> Tour Team Building</h3>
			<p class="text-justify">Các trò chơi vận động liên hoàn – Team building, Đua thuyền thúng bắt vịt, Làm bánh khọt, TÁT ao BẮT cá. Ăn trưa tại khu du lịch Vinh Sang, tự nấu ăn chiều tại vườn.</p>
			<hr>
			<h3 style="color: #296192">Giá: 269000/Người</h3>
			<hr>
			<button class="btn btn-danger" onclick="chuyentrang()">Đặt tour</button>
		</div>
	</div>
	<br>

</div><!--End Content-->
@endsection