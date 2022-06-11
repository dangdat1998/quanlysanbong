<title>Lịch sử đặt sân</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/index.css" />

<?php
	include("session.php");

	include("header.php");
?>
<div class="container">
    <div class="datsan-block">
        <div class="title-list"><b>TỔNG HỢP ĐẶT SÂN</div> <br/>
        <div class="list-table-block">
            <select class="form-select" id="check-tt-admin" onchange="xemlichsu_admin()">
                <option value="2" selected>Tình trạng thanh toán</option>
                <option value="0">Chưa thanh toán</option>
                <option value="1">Đã thanh toán</option>
            </select>
            <div class="container" id="ds_datsan_chuathanhtoan"></div><br />
        </div>
    </div>
</div>
<style>
    .list-table-block select{
        width: 25%!important;
        margin: 30px 50px
    }
</style>
<?php
		include("footer.php");
	?>
<script>
$(document).ready(function() {
    xemDsChuathanhtoan(2);
})
function xemlichsu_admin(){
    let a=document.getElementById('check-tt-admin').value;
    xemDsChuathanhtoan(a);
}
</script>
