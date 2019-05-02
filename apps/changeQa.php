<?php
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    require_once "../config/config.php";

    $modify_date = date('Y-m-d h:m:s');

    $sql = "UPDATE `_tbl_questionanswer` SET `category`='$_POST[cat]', `question_text`='".AntiInject($_POST[qt])."', `answer_text`='".AntiInject($_POST[at])."', `modify_by`='".$_SESSION['name']."', `modify_date`='$modify_date' WHERE id='$_POST[id]'";
    
    $res = mysql_query($sql);
    $id = $_POST['id'];
    if($res === true){
        _redirectToP('http://127.0.0.1/wasse/apps/?module=editQa&msg=success&id='.$id);
    }
    else{
        _redirectToP('http://127.0.0.1/wasse/apps/?module=editQa&msg=err_save&id='.$id);
    }
     
?>