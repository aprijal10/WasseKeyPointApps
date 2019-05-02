<?php
    require_once "../config/config.php";

    $id   = $_GET[id];    
    $cover = $_GET['cover'];
    mysql_query("DELETE FROM `_tbl_news` WHERE `id`='$id'");    
    unlink("../news/$cover");

    _redirectToP("http://127.0.0.1/wasse/apps/?module=top_news");

?>