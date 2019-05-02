<?php
    require_once "../config/config.php";

    $id   = $_GET[id];
    mysql_query("DELETE FROM `_tbl_questionanswer` WHERE `id`='$id'");

    _redirectToP("http://127.0.0.1/wasse/apps/?module=qa");

?>