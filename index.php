<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Đặt sân</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/trangchu.css" />
<body>
	<?php
		include("session.php");
		include("header.php");
		include('sanbongjs.php')
	?>
	<div class="container page-datsan cont">
		<h1><b>THÔNG TIN ĐẶT SÂN</b></h1> 
		<div class="input-group date">
			<span class="input-group-text"><b>NGÀY</b></span>
			<input type="text" aria-label="First name" class="form-control" id="datepicker">
		</div>
		<!-- <div class="ngaydatsan"><b>NGÀY: </b><input type="text" id="datepicker"/></div><br/> -->
		<br />
		<div class="datsan-block">
			<div class="title"><p>TÌNH TRẠNG ĐẶT SÂN</p></div>
			<div class="ngay-list"><b> NGÀY <span id='tieudetime'></span></b></div><br />
			<div class="time-table-block">
				<div class="container" id="time_table"></div> <br />
			</div>
		</div>
		<br/>
		<?php 
			if ($rs['chucvu'] == 1) {
				echo '<div class="datsan-block">
				<div class="title"><p>DANH SÁCH ĐẶT SÂN</p></div>
				<b><div class="ngay-list">NGÀY <span id="tieudeds"></span></b></div><br />
				<div class="list-table-block">
					<div class="container" id="ds_datsan"></div><br />
				</div>
			</div>
			<br />';
			}
		?>
		<?php 
			if ($rs['chucvu'] == 0) {
				echo '<div class="datsan-block">
					<div class="title"><p>SÂN ĐÃ ĐẶT THEO NGÀY</p></div> <b><div class="ngay-list">NGÀY <span style="color:red;" id="tieudeds_khach"></span></b></div><br />
						<div class="list-table-block">
							<div class="container" id="ds_datsan_khach"></div><br />
						
						</div>
					</div>
			<br />';
			}
		?>

		
		
		<style>
			
		</style>
		<?php
		$sql = "SELECT * FROM tai_khoan WHERE username = '".$_SESSION['login_user']."'";
		$rs = mysqli_fetch_assoc(mysqli_query($db, $sql));
			
		?>
		<div id='grayscreen'></div>
		<div id='formDatSan'>
		<div class="title"><p>ĐẶT SÂN</p></div>
			<br />
			<table>
				<tr>
					<td>Sân:</td>
					<td><span id='datsan_tensan' style='font-weight:bold;'></span></td>
				</tr>
				<tr class="display-none">
					<td>ID:</td>
					<td><span id='datsan_khachhang' style='font-weight:bold;color:red;'><?php echo $rs['id'];?></span></td>
				</tr>
				<tr>
					<td>Khách hàng:</td>
					<td><span id='datsan_tenkhachhang' style='font-weight:bold;color:red;'></span><?php echo $rs['username'];?></td>
				</tr>
				<tr>
					<td>SĐT:</td>
					<td><span id='datsan_sdt' style='font-weight:bold;color:red;'></span><?php echo $rs['sdt'];?></td>
				</tr>
				<tr>
					<td>Ngày đặt:</td>
					<td><b><span id='datsan_ngaydat'></span></b></td>
				</tr>
				<tr>
					<td>Bắt đầu:</td>
					<td>
						Giờ: 
						<select id="datsan_batdau_gio">
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
						</select>
						Phút:
						<select id="datsan_batdau_phut">
							<option value="0">00</option>
							<option value="15">15</option>
							<option value="30">30</option>
							<option value="45">45</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Kết thúc:</td>
					<td>
						Giờ: 
						<select id='datsan_ketthuc_gio'>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
						</select>
						Phút:
						<select id="datsan_ketthuc_phut">
							<option value="0">00</option>
							<option value="15" selected>15</option>
							<option value="30">30</option>
							<option value="45">45</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Tổng thời gian:</td>
					<td><span id='datsan_phut'></span> phút</td>
				</tr>
				<tr>
					<td>Đơn giá (/phút):</td>
					<td><input type='text' id='datsan_dongia' size='5' value='3000' disabled/>đ</td>
				</tr>
				<tr>
					<td>Tổng tiền:</td>
					<td><span id='datsan_tongtien' style='color:red;font-weight:bold;'>0đ</span></td>
				</tr>	
			</table>
			<div class="btn-formdatsan">
				<button type="button" class="btn btn-primary" id='datsan_ok'>Đồng ý</button>
				<button type="button" class="btn btn-danger" id='datsan_cancel'>Hủy</button>
			</div>
		</div>
	<?php 
		if ($rs['chucvu'] == 1) {
			echo '<div class="datsan-block">
			<div class="title"><p>SƠ ĐỒ SÂN BÓNG</p></div><br />
				<div id="viewsanbong"></div>
			</div>';
	}
	?>
	</div>
<?php
		include("footer.php");
?>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
	
	xemDsDatSan(getToday());
	xemDsDatSanKhach(getToday());

	$("#datsan_batdau_gio").on("input", function(){
        // Print entered value in a div box
		if($("#datsan_batdau_gio").val()<16){
			$("#datsan_dongia").val('3000');
		}
		else if($("#datsan_batdau_gio").val()<17 || ($("#datsan_batdau_gio").val()>=17 && $("#datsan_batdau_gio").val()<18 && $("#datsan_batdau_phut").val()<=30)){
			$("#datsan_dongia").val('6000');
		}
		else if($("#datsan_batdau_gio").val()<20 || ($("#datsan_batdau_gio").val()>=20 && $("#datsan_batdau_gio").val()<21 && $("#datsan_batdau_phut").val()<=30)){
			$("#datsan_dongia").val('8000');
		}
		else {
			$("#datsan_dongia").val('4000');
		} 
    });
	$("#datsan_batdau_phut").on("input", function(){
        // Print entered value in a div box
		if($("#datsan_batdau_gio").val()<16){
			$("#datsan_dongia").val('3000');
		}
		else if($("#datsan_batdau_gio").val()<17 || ($("#datsan_batdau_gio").val()>=17 && $("#datsan_batdau_gio").val()<18 && $("#datsan_batdau_phut").val()<=30)){
			$("#datsan_dongia").val('6000');
		}
		else if($("#datsan_batdau_gio").val()<20 || ($("#datsan_batdau_gio").val()>=20 && $("#datsan_batdau_gio").val()<21 && $("#datsan_batdau_phut").val()<=30)){
			$("#datsan_dongia").val('8000');
		}
		else {
			$("#datsan_dongia").val('4000');
		} 
    });

	$("#datepicker").daterangepicker({
		singleDatePicker: true,
		showDropdowns: true,
		minYear: 2019,
		maxYear: parseInt(moment().format('YYYY'), 10)
	}, function(start, end, label) {
		xemDsDatSan(start.format("YYYY-MM-DD"));
		xemDsDatSanKhach(start.format("YYYY-MM-DD"));
	});
	
	
	$("#datsan_ok").click(function() {
		// insert into database
		var ma_kh = Number($('#datsan_khachhang')[0].lastChild.data);
		var ma_san = $("#datsan_tensan").attr("ma_san");
		var ngay_dat = $("#datsan_ngaydat").text();
		var bat_dau_gio = $("#datsan_batdau_gio").val();
		var bat_dau_phut = $("#datsan_batdau_phut").val();
		var ket_thuc_gio = $("#datsan_ketthuc_gio").val();
		var ket_thuc_phut = $("#datsan_ketthuc_phut").val();
		var bat_dau = ngay_dat + " " + bat_dau_gio + ":" + bat_dau_phut + ":" + "00";
		var ket_thuc = ngay_dat + " " + ket_thuc_gio + ":" + ket_thuc_phut + ":" + "00";
		if ($("#datsan_dongia").val().trim() == "") {
			$("#datsan_dongia").val("0");
		}
	
		var don_gia = $("#datsan_dongia").val();
		if (parseInt(don_gia) < 3000) {
			thongbaoloi("Đơn giá không được nhỏ hơn 3000đ/phút!!!");
			return;
		}
		taoDatSan(ma_kh, ma_san, bat_dau, ket_thuc, don_gia);
		$("#formDatSan").css("display","none");
		$("#grayscreen").css("display","none");
	});
	
	$("#datsan_cancel").click(function() {
		$("#formDatSan").css("display","none");
		$("#grayscreen").css("display","none");
		// $("#datsan_them_ten").val("");
		// $("#datsan_them_sdt").val("");
	});

	function taoDatSan(ma_kh, ma_san, bat_dau, ket_thuc, don_gia) {
		$.ajax({
			url: "/quanlysanbong/api/taodatsan.php",
			type: "POST",
			cache: false,
			data: {
				ma_kh : ma_kh,
				ma_san : ma_san,
				bat_dau : bat_dau,
				ket_thuc : ket_thuc,
				don_gia : don_gia
			},
			success: function(msg) {
				if (msg.includes("trùng")) {
					thongbaoloi("Không thể tạo đặt sân", msg);
				} else {
					thongbaotot(msg);
				}
				xemDsDatSan(getCurrentFormattedDate());
				xemDsDatSanKhach(getCurrentFormattedDate());
			},
			error: function() {
				thongbaoloi("Lỗi hệ thống!!");
			}
		});
	}
});
</script>