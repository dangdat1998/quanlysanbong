<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>QUẢN LÝ SÂN BÓNG 1.0</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/trangchu.css" />
<body>
	<?php
	include("config/config.php");
	session_start();
	include("header.php");
	?>
	<div class="slider">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" id="car-1" data-bs-interval="8000">
					<img src="images\carosel1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block cap-car">
						<h4>Sân bóng đá mini An Dương</h4>
						<a href="index.php" class="carousel-datsan"><button class="btn">Đặt ngay</button></a>
					</div>
				</div>
				<div class="carousel-item" data-bs-interval="8000">
					<img src="images\carosel2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block cap-car">
					<h4 style="padding-bottom:10px">Giá thuê sân</h4>
					<table class="table">
						<thead align="center">
							<tr>
								<th scope="col">Từ</th>
								<th scope="col">Đến</th>
								<th scope="col">Đơn giá (/phút)</th>
							</tr>
						</thead>
						<tbody align="center">
							<tr>
								<td>5:00</td>
								<td>16:00</td>
								<td>3.000đ</td>
							</tr>
							<tr>
								<td>16:01</td>
								<td>17:30</td>
								<td>6.000đ</td>
							</tr>
							<tr>
								<td>17:31</td>
								<td>20:30</td>
								<td>8.000đ</td>
							</tr>
							<tr>
								<td>20:31</td>
								<td>22:45</td>
								<td>4.000đ</td>
							</tr>
						</tbody>
					</table>
					</div>	
				</div>
				<div class="carousel-item" data-bs-interval="8000">
					<img src="images\carosel3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block carosel-diachi cap-car-3" >
						<h4>Liên hệ</h4>
						<p>Địa chỉ:  Ngõ 76 An Dương, Yên Phụ (Quận Tây Hồ, Hà Nội)</p>
						<p>Thời gian mở cửa: 06:00 - 22:00, từ thứ 2 đến CN</p>
						<p>Số điện thoại: 0984380888</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<div class="end-slide"></div>
	</div>

	<div class="container cont header trangchu">	
		<h1 class="page-name">SÂN BÓNG ĐÁ AN DƯƠNG</h1>
		<div class="gioithieu">
			<div class="title"><p>Giới thiệu chung về sân</p></div>
			<div class="content row">
				<div class="col">
					<img src="images\sanbong.jpg" alt="">
				</div>
				<div class="col">
					<p>Sân bóng cỏ nhân tạo An Dương nằm ở Ngõ 76 An Dương, Yên Phụ, Quận Tây Hồ. Vào năm 2012, sân đất An Dương được nâng cấp thành sân cỏ nhân tạo và được đưa vào sử dụng sau đó.</p> 
					<p>Lợi thế của sân đầu tiên có thể kể đến là việc sân nằm ngay trung tâm Hà Nội, cực kỳ dễ dàng cho các bạn trong việc đi lại, tìm kiếm sân.</p>
					<p>Mặt sân có chất lượng rất tốt. Sân bằng phẳng, cỏ nhân tạo chất lượng cao, mềm, độ ma sát, bám dính tốt, chống trơn trượt.</p>
					<p>Thêm vào đó, dàn đèn cao áp cung cấp đầy đủ ánh sáng phục vụ khách chơi ban đêm. Hệ thống cấp thoát nước cũng luôn được duy trì hoạt động ổn định.</p>
					<p>Ngoài ra, sân bóng An Dương cũng cung cấp dịch vụ khá chu đáo, có lực lượng bảo vệ.</p>
					<p>Sân chỉ có 1 điểm trừ duy nhất là dễ mất bóng vì nếu bóng bay qua hàng rào lưới thì bên ngoài là bãi đất với nhiều cây khá um tùm.</p>
					<p>Giá thuê của sân tuỳ vào từng khung giờ.</p>
					<p>Đây được đánh giá là sân bóng phù hợp với các bạn trẻ khu vực Quận Tây Hồ. </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="giatien col">
				<div class="title"><p>Giá thuê sân</p></div>
				<div class="content row">
					<table class="table table-striped col">
						<thead>
							<tr>
								<th scope="col">Từ</th>
								<th scope="col">Đến</th>
								<th scope="col">Đơn giá (/phút)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>5:00</td>
								<td>16:00</td>
								<td>3.000đ</td>
							</tr>
							<tr>
								<td>16:01</td>
								<td>17:30</td>
								<td>6.000đ</td>
							</tr>
							<tr>
								<td>17:31</td>
								<td>20:30</td>
								<td>8.000đ</td>
							</tr>
							<tr>
								<td>20:31</td>
								<td>22:45</td>
								<td>4.000đ</td>
							</tr>
						</tbody>
					</table>
					<div class="col-4 btn-dat">
						<a class="btn btn-primary" href="index.php" role="button">Đặt ngay</a>
					</div>
				</div>
				<div style="text-align: center;"><i>Đơn giá đặt sân sẽ được tính theo thời gian bắt đầu</i></div>
			</div>
			<div class="diachi col">
				<div class="title"><p>Địa chỉ</p></div>
				<div class="content">Ngõ 76 An Dương, Yên Phụ (Quận Tây Hồ, Hà Nội)</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.390035650912!2d105.83996501485484!3d21.057078685982997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aa4d73694915%3A0x568463ca9fff4dbe!2zU8OibiBiw7NuZyBBbiBExrDGoW5nLCBOZy4gNzYgQW4gRMawxqFuZywgVOG7qSBMacOqbiwgVMOieSBI4buTLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1654195730080!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		<div class="tinmoi">
			<div class="title"><p>Tin tức</p></div>
			<?php
			if(isset($_SESSION['login_user']) && $rs['chucvu'] == 1){
				echo '<button type="button" class="btn btn-primary" id="them-tinmoi">Thêm tin mới</button>';
			}
			?>
			
			<div id="list-san">
				<?php 
				$sql_tin = "SELECT * FROM post ORDER BY time DESC";
				$rs_tin = mysqli_query($db, $sql_tin);
				$html='';
				while($row = mysqli_fetch_assoc($rs_tin)) {
					$html.='<div class="tintuc-item">
					<div>
					<a href="tintuc.php?tin='.$row['id'].'" class="title-tin">'.$row['title'].'</a>';
					if(isset($_SESSION['login_user']) && $rs['chucvu'] == 1){
						$html.='<input type="button" class="btn-xoatin" value="Xóa" onclick="xoatt('.$row['id'].')">';
					}
					
					$format = "<div><span style='padding-right: 15px'>%H:%M:%S</span><span>%d-%m-%Y</span></div>";
					$html.='</div><div>'.strftime($format,$row['time']+18000).'</div>';
					$html.='</div>';
				}

				echo $html;
				?>
			</div>

			<div id='grayscreentt'></div>
				<div id='formTintuc'>
				<div class="title"><p>THÊM TIN MỚI</p></div>
				<br />
				<table>
					<tr>
						<td class="label"><label for="floatingTextarea">Title</label></td>
						<td class="input">
							<input class="form-control" id="them-title"></input>
						</td>
					</tr>
					<tr>
						<td class="label"><label for="floatingTextarea">Nội dung</label></td>
						<td class="input">
							<div class="form-floating">
								<textarea class="form-control" placeholder="Leave a comment here" id="them-content"></textarea>						
							</div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<div class="btn-formthemtin">
							<button type="button" class="btn btn-primary" id='themtin_ok'>Đồng ý</button>
							<button type="button" class="btn btn-danger" id='themtin_cancel'>Hủy</button>
						</div>
							
						</td>
					</tr>
				</table>
			</div>

		</div>
			
		
	</div>
</body>
<?php
		include("footer.php");
	?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {

		$("#them-tinmoi").click(function(){
			$("#formTintuc").css("display","block");
			$("#grayscreentt").css("display","block");
		})
	
		$("#themtin_ok").click(function() {
			// insert into database
			var title = $("#them-title").val();
			var content = $("#them-content").val();
			console.log(title);
			console.log(content);
			if(title!='' && content!=''){
				taoTin(title,content);
				location.reload()

				$("#formTintuc").css("display","none");
				$("#grayscreentt").css("display","none");
			}else{
				if(title==''){
					$("#them-title").css("border","solid 1px red");
				}else{
					$("#them-title").css("border","solid 1px black");
				}
				if(content==''){
					$("#them-content").css("border","solid 1px red");
				}else{
					$("#them-content").css("border","solid 1px black");
				}
				
			}
			
		});
	
		$("#themtin_cancel").click(function() {
			$("#formTintuc").css("display","none");
			$("#grayscreentt").css("display","none");
	});

		function taoTin(title,content) {
			$.ajax({
				url: "/quanlysanbong/api/taotin.php",
				type: "POST",
				cache: false,
				data: {
					title : title,
					content : content,
					type : 'them'
					
				},
				success: function(msg) {
					
				},
				error: function() {
					thongbaoloi("Lỗi hệ thống!!");
				}
			});

			location.reload()
		}
	});
function xoatt(id){
	$.ajax({
		url: "/quanlysanbong/api/taotin.php",
		type: "POST",
		cache: false,
		data: {
			id : id,
			type : 'xoa'
		},
		success: function(msg) {
				
		},
		error: function() {
			thongbaoloi("Lỗi hệ thống!!");
		}
	});

	location.reload()

}
</script>