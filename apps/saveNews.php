<?php
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    require_once "../config/config.php";
    
    $title   = $_POST['title'];
    $content = $_POST['content'];

    $ekstensi_diperbolehkan	= array('pdf','jpg', 'jpeg', 'png');

    $nama1 = $_FILES['picture']['name'];
	$x1 = explode('.', $nama1);
	$ekstensi = strtolower(end($x1));
	$ukuran1	= $_FILES['picture']['size'];
	$file_tmp1 = $_FILES['picture']['tmp_name'];

    $modify_date = date('Y-m-d h:m:s');

    
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        
        if($ukuran < 1044070){	            
            move_uploaded_file($file_tmp1, '../news/'.$nama1);

            $sql = "INSERT INTO `_tbl_news` SET `title`='$title', `content`='$content',`picture`='http://localhost/Wasse/news/$nama1', `author`='$_POST[author]', `date_news`='$_POST[date_news]', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date'";
            $res = mysql_query($sql);

            if($res === true){
                _redirectToP('http://127.0.0.1/wasse/apps/?module=addNews&msg=success');
            }
            else{
                _redirectToP('http://127.0.0.1/wasse/apps/?module=addNews&msg=err_add');
            }
        }
        else{
            _redirectToP('http://127.0.0.1/wasse/apps/?module=addNews&msg=err_add');
        }        
        
        
    }
    else{
        _redirectToP('http://127.0.0.1/wasse/apps/?module=addNews&msg=err_file');
    }
?>