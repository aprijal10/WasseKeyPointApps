<?php
    session_start();
    session_destroy();
    require_once "brd.php";
    _redirectTo('../apps/login.php?msg=logout');
?>