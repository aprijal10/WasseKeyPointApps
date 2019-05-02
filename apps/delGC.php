<?php
    require_once "../config/config.php";

    $id   = $_GET[id];
    $file = $_GET['file'];
    mysql_query("DELETE FROM `_tbl_groupchat` WHERE `id`='$id'");
    unlink("../gc/$file");

    _redirectToP("http://127.0.0.1/wasse/apps/?module=group_chat");

?>