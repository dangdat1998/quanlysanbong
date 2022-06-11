<title>Lịch sử đặt sân</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/index.css" />

<?php
	include("config/config.php");
	session_start();
	include("header.php");
?>
 <?php
			$sql = "SELECT * FROM post WHERE id = ".$_GET['tin'];
			$rs = mysqli_query($db, $sql);
            $row = mysqli_fetch_row($rs);
			
		?>
<div class="container" style="min-height: 100vh">
    <div class="tintuc-block">
        <div class="title-list title-tintuc"><b><?php echo $row[2] ?></b></div> <br/>
        <div>
            <p><?php echo $row[3] ?></p>
        </div>
        <input type="button" id="btn-xoatin-a" value="Xóa" onclick="xoatt(<?php echo $row[0] ?>)">
    </div>
</div>
<?php
		include("footer.php");
	?>
<script>
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
