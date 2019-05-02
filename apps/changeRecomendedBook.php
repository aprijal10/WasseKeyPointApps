<?php
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    require_once "../config/config.php";
    
    $title = $_POST['title'];
    $desc  = $_POST['desc'];

    $ekstensi_diperbolehkan	= array('pdf','jpg', 'jpeg', 'png');

	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    

    $nama1 = $_FILES['cover_book']['name'];
	$x1 = explode('.', $nama1);
	$ekstensi1 = strtolower(end($x1));
	$ukuran1	= $_FILES['cover_book']['size'];
	$file_tmp1 = $_FILES['cover_book']['tmp_name'];

    $modify_date = date('Y-m-d h:m:s');
    $id = $_POST['id'];
    if(!empty($file_tmp) && !empty($file_tmp1)){
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        
            if($ukuran < 1044070){	
                move_uploaded_file($file_tmp, '../book/'.$nama);
                move_uploaded_file($file_tmp1, '../book/'.$nama1);
    
                $sql = "UPDATE `_tbl_recomendedbook` SET `title`='$title', `describe`='$desc',`book_picture`='http://localhost/Wasse/book/$nama1', `file`='$nama', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date' WHERE id='$_POST[id]'";
                $res = mysql_query($sql);
    
                if($res === true){
                    _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=success&id='.$id);
                }
                else{
                    _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_add&id='.$id);
                }
            }
            else{
                _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_add&id='.$id);
            }        
            
            
        }
        else{
            _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_file&id='.$id);
        }
    }
    elseif(!empty($file_tmp) && empty($file_tmp1)){
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        
            if($ukuran < 1044070){	
                move_uploaded_file($file_tmp, '../book/'.$nama);
                //move_uploaded_file($file_tmp1, '../book/'.$nama1);
    
                $sql = "UPDATE `_tbl_recomendedbook` SET `title`='$title', `describe`='$desc', `file`='$nama', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date' WHERE id='$_POST[id]'";
                $res = mysql_query($sql);
    
                if($res === true){
                    _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=success&id='.$id);
                }
                else{
                    _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_add&id='.$id);
                }
            }
            else{
                _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_add&id='.$id);
            }        
            
            
        }
        else{
            _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_file&id='.$id);
        }
    }
    elseif(empty($file_tmp) && !empty($file_tmp1)){
        if(in_array($ekstensi1, $ekstensi_diperbolehkan) === true){
        
            if($ukuran1 < 1044070){	
                //move_uploaded_file($file_tmp, '../book/'.$nama);
                move_uploaded_file($file_tmp1, '../book/'.$nama1);
    
                $sql = "UPDATE `_tbl_recomendedbook` SET `title`='$title', `describe`='$desc', `book_picture`='http://localhost/Wasse/book/$nama1', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date' WHERE id='$_POST[id]'";
                $res = mysql_query($sql);
    
                if($res === true){
                    _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=success&id='.$id);
                }
                else{
                    _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_add&id='.$id);
                }
            }
            else{
                _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_add&id='.$id);
            }        
            
            
        }
        else{
            _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_file&id='.$id);
        }
    }
    else{
        $sql = "UPDATE `_tbl_recomendedbook` SET `title`='$title', `describe`='$desc', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date' WHERE id='$_POST[id]'";
        $res = mysql_query($sql);
    
        if($res === true){
            _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=success&id='.$id);
        }
        else{
            _redirectToP('http://127.0.0.1/wasse/apps/?module=editBook&msg=err_add&id='.$id);
        }
    }


    


    
?>