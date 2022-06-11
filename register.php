<?php
	session_start();
	
	if (isset($_SESSION['login_user'])) {
		header("location:index.php");
		die();
	}
?>
<title>Đăng Ký</title>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />

<script src="lib/jquery-3.4.1.js"></script>
<link rel="stylesheet" type="text/css" href="lib/toast/jquery.toast.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script src="lib/toast/jquery.toast.min.js"></script>
<script src="lib/common.js"></script>
<style>

</style>



<form id="registerForm">
<h2>QUẢN LÝ SÂN BÓNG ĐÁ</h2>
  <div class="mb-3">
    <label class="form-label">Họ và tên</label>
    <input type="text" id="ten"  class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Số điện thoại</label>
    <input type="number" id="sdt"  class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Tên tài khoản</label>
    <input type="text" id="name"  class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" id="matkhau">
  </div>
  <div class="register-btn"><button class="btn btn-primary" id='btnRegister'>Đăng ký</button></div>
  <div class="reg-login"><a href="login.php">Đăng nhập</a></div>

</form>

<script>
$(document).ready(function() {
	checkInputs();
	$("#btnRegister").click(function() {
		
		var hoten = $("#ten").val().trim();
		var sdt =  $("#sdt").val().trim();
		var u = $("#name").val().trim();
		var p =  $("#matkhau").val().trim();
		
		if (hoten == "" || sdt == "" || u == "" || p == "") {
			thongbaoloi("Không được bỏ trống!!!");
			return;
		}
		
		$.ajax({
			url: "/quanlysanbong/api/dangnhap.php",
			type: "POST",
			cache: false,
			data: {
				action: "dangky",
				hoten: hoten,
				sdt: sdt,
				username: u,
				password: p
			},
			success: function(msg) {
				if (msg == "Đăng ký thành công") {
					location.href = 'trangchu.php';
				} else {
					thongbaoloi(msg);
				}
				
			}
		});
	});
});
</script>
