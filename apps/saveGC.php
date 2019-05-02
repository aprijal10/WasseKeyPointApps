<?php
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    require_once "../config/config.php";
    
    $title = $_POST['title'];
    $desc  = $_POST['desc'];

    $ekstensi_diperbolehkan	= array('jpg','png', 'jpeg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

    $modify_date = date('Y-m-d h:m:s');

    
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        
        if($ukuran < 1044070){	
            move_uploaded_file($file_tmp, '../gc/'.$nama);

            $sql = "INSERT INTO `_tbl_groupchat` SET `chat_title`='$title', `chat_picture`='http://127.0.0.1/Wasse/gc/$nama', `link_chat`='$_POST[lc]', `describe`='$desc', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date'";
            $res = mysql_query($sql);

            if($res === true){
                _redirectToP('http://127.0.0.1/wasse/apps/?module=group_chat&msg=success');
            }
            else{
                _redirectToP('http://127.0.0.1/wasse/apps/?module=group_chat&msg=err_add');
            }
        }
        else{
            _redirectToP('http://127.0.0.1/wasse/apps/?module=group_chat&msg=err_add');
        }        
        
        
    }
    else{
        _redirectToP('http://127.0.0.1/wasse/apps/?module=group_chat&msg=err_file');
    }
?>