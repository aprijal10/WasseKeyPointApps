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
            move_uploaded_file($file_tmp, '../univ/'.$nama);

            $sql = "INSERT INTO `_tbl_univ` SET `univ_name`='$title', `describe`='$desc', `univ_picture`='univ/$nama', `link`='$_POST[lc]', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date'";
            $res = mysql_query($sql);

            if($res === true){
                _redirectToP('http://127.0.0.1/wasse/apps/?module=addUC&msg=success');
            }
            else{
                _redirectToP('http://127.0.0.1/wasse/apps/?module=addUC&msg=err_add');
            }
        }
        else{
            _redirectToP('http://127.0.0.1/wasse/apps/?module=addUC&msg=err_add');
        }        
        
        
    }
    else{
        _redirectToP('http://127.0.0.1/wasse/apps/?module=addUC&msg=err_file');
    }
?>