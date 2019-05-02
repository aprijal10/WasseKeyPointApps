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

    $id = $_POST['id'];

    if(!empty($file_tmp)){
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        
            if($ukuran < 1044070){	
                move_uploaded_file($file_tmp, '../univ/'.$nama);
    
                $sql = "UPDATE `_tbl_univ` SET `univ_name`='$title', `describe`='$desc', `univ_picture`='univ/$nama', `link`='$_POST[lc]', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date' WHERE id='$id'";
                $res = mysql_query($sql);
    
                if($res === true){
                    _redirectToP('http://127.0.0.1/wasse/apps/?module=editUC&msg=success&id='.$id);
                }
                else{
                    _redirectToP('http://127.0.0.1/wasse/apps/?module=editUC&msg=err_add&id='.$id);
                }
            }
            else{
                _redirectToP('http://127.0.0.1/wasse/apps/?module=editUC&msg=err_add&id='.$id);
            }        
            
            
        }
        else{
            _redirectToP('http://127.0.0.1/wasse/apps/?module=editUC&msg=err_file&id='.$id);
        }
    }
    else{
        $sql = "UPDATE `_tbl_univ` SET `univ_name`='$title', `describe`='$desc', `link`='$_POST[lc]', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date' WHERE id='$id'";
        $res = mysql_query($sql);
    
        if($res === true){
            _redirectToP('http://127.0.0.1/wasse/apps/?module=editUC&msg=success&id='.$id);
        }
        else{
            _redirectToP('http://127.0.0.1/wasse/apps/?module=editUC&msg=err_add&id='.$id);
        }
    }
    
?>