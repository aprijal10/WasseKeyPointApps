<?php
    //error_reporting(0);
    require_once "../config/config.php";
    $uname  = AntiInject($_POST['uname']);
    $passwd = EncPassword(AntiInject($_POST['passwd']));

    $q = "SELECT * FROM `_tbl_users` WHERE `user_name`='".$uname."' AND `passwd`='".$passwd."' AND `is_active`='Y'";
    $h = mysql_query($q);
    $exist = mysql_num_rows($h);

    //echo $exist;
    
    if($exist > 0){
        session_start();
        $r = mysql_fetch_array($h);
        $_SESSION['user_name'] = $r['user_name'];
        $_SESSION['passuser']  = $r['passwd'];
        $_SESSION['name']      = $r['name'];
        $_SESSION['token']     = $r['token'];

        _redirectToP('http://127.0.0.1/wasse/apps/?');
    }
    else{
        _redirectToP('login.php?msg=err_login');
    }
    
    
?>