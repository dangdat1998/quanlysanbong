<?php
	include("../session.php");
	
	$title = $_POST['title'];
	$content = $_POST['content'];

    
    if($_POST['type']=='them'){
        if(empty($title) || empty($content)){
            echo 'Phải điền đủ thông tin';
        } else{
            mysqli_query($db, "INSERT INTO post (`id`, `username`,`title`, `content`, `time`) VALUES (NULL, '".$rs['username']."','".$title."', '".$content."', '".time()."')");
        }
    }else if($_POST['type']=='xoa'){
        mysqli_query($db, "DELETE FROM post WHERE id=".$_POST['id']);
    }
 
    
	die;
?>