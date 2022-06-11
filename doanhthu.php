<title>Doanh Thu</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/index.css" />

<?php
	include("session.php");
	if ($rs['chucvu'] == 0) {
		header("location:index.php");
		die();
	}
	include("header.php");
	
		
	
?>
<div class="container cont page-doanhthu">
	<h1><b>THỐNG KÊ DOANH THU</b></h1> 
	<!-- <div>Ngày <input type="text" id="datepicker"/><br/></div> -->
	<div class="input-group date">
		<span class="input-group-text"><b>NGÀY</b></span>
		<input type="text" aria-label="Doanh thu" class="form-control" id="datepicker">
	</div>
	<br />
	<span id='tieude'></span><br />
	<br />
	<div id='ds_datsan'>
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor' crossorigin='anonymous'>
		<link rel='stylesheet' type='text/css' href='css/common.css' />
		<table class='table'>
			<thead class='thead-listdatsan'><tr><th>#</th><th>Tên KH</th><th>SĐT</th><th>Sân</th><th>Bắt đầu</th><th>Kết thúc</th><th>Phút</th><th>Đơn giá (/phút)</th><th>Tiền</th><th>Đã thanh toán</th><th>Thanh toán</th><th>Xóa</th></tr></thead>
			<tbody>
				<tr>
					<td colspan="12" align='center'><i>Chọn khoảng thời gian cần thống kê doanh thu</i></td>
				</tr>
				<div id="list-dt"></div>
			</tbody>
		</table>
	</div><br />	
</div>
<?php
	include("footer.php");
?>
<script>
$(document).ready(function() {
	
	$('#datepicker').daterangepicker({
	
	}, function(start, end, label) {
		g_bat_dau = start.format("YYYY-MM-DD");	
		g_ket_thuc = end.format("YYYY-MM-DD");
		$("#tieude").html("<b>Doanh thu từ ngày " + start.format("DD-MM-YYYY") + " đến " + end.format("DD-MM-YYYY") + "</b>");
		$("list-dt").html(xemDoanhThu(g_bat_dau, g_ket_thuc));
	});
});

</script>

