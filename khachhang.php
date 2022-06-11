<title>Khách Hàng</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/index.css" />
<?php
	include("session.php");
	if ($rs['chucvu'] == 0) {
		header("location:index.php");
		die();
	}
	include("header.php");
	

?>
<div class="container cont page-kh">
	
	<h1><b>DANH SÁCH KHÁCH HÀNG</b></h1> 
	<br />
	<div id='tblKhachHang'></div>
</div>
<?php
		include("footer.php");
	?>
<script>
	$(document).ready(function() {
		
		taoDsKhachHang();
		function taoDsKhachHang() {
			$.ajax({
				url: "/quanlysanbong/api/dskhachhang.php",
				type: "GET",
				cache: false,
				data: {
					action: "view"
				},
				success: function(json) {
					var data = $.parseJSON(json);
					var chucvu =[];
					var html = "";
					html += "<table class='table'>";
					html += "<thead style='border-bottom: solid 1px'><tr><th scope='col'>#</th><th scope='col'>Tên KH</th><th scope='col'>Số điện thoại</th><th scope='col'>Chức vụ</th></tr></thead>";
					html +="<tbody class='tbody-khachhang'>";
					for (var i = 0; i < data.length; i++) {
						if(data[i].chucvu==0){
							chucvu[i]='Khách hàng';
						}else{
							chucvu[i]='Quản lý';
						}
						
						html += "<tr>";
						html += "<td scope='row'>" + (i + 1) + "</td><td>" + data[i].ten + "</td><td>" + data[i].sdt + "</td><td>"+chucvu[i]+"</td>";
						
					}
					html += "</tr></tbody>";
					html += "</table>";
					$("#tblKhachHang").html(html);

				},
				error: function() {
					thongbaoloi("Khong the lay danh sach khach hang!!!");
				}
			});
		}

	});
</script>