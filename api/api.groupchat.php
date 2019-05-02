<?php
    error_reporting(0);
    header("Access-Control-Allow-Origin: *");
    date_default_timezone_set("Asia/Jakarta");
    require_once "../config/config.php";
    $sql = "SELECT * FROM `_tbl_groupchat` ORDER BY `chat_title`,`id` ASC";
    $h   = mysql_query($sql);
    $ada = mysql_num_rows($h);

    if($ada > 0){
        $arr = array();
        while($r = mysql_fetch_array($h)){
            $res = array(
                "id"           => $r['id'],
                "chat_title"   => $r['chat_title'],
                "chat_picture" => $r['chat_picture'],
                "link_chat"    => $r['link_chat'],
                "describe"     => $r['describe'],                
                "modify_by"    => $r['modify_by'],
                "modify_date"  => $r['modify_date'],
                "message" => "OK"
            );
            array_push($arr, $res);
        }
        $data = json_encode($arr, JSON_PRETTY_PRINT);
        echo $data;
    }
    else{
        $res = array(
            "message"  => "Not Found",
            "code"     => 404
        );
        echo "[".json_encode($res)."]";
    }
    

