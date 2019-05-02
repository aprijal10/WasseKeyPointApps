<?php
    require_once "../config/config.php";

    $id   = $_GET[id];
    $file = $_GET['file'];
    $cover = $_GET['cover'];
    mysql_query("DELETE FROM `_tbl_recomendedbook` WHERE `id`='$id'");
    unlink("../book/$file");
    unlink("../book/$cover");

    _redirectToP("http://127.0.0.1/wasse/apps/?module=recomended_book");

?>