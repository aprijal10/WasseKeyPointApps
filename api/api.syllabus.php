<?php
    error_reporting(0);
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    date_default_timezone_set("Asia/Jakarta");
    require_once "../config/config.php";
    $sql = "SELECT * FROM `_tbl_syllabus` ORDER BY `title`,`id` ASC";
    $h   = mysql_query($sql);
    $ada = mysql_num_rows($h);

    if($ada > 0){
        $arr = array();
        while($r = mysql_fetch_array($h)){
            $res = array(
                "id"          => $r['id'],
                "title"       => $r['title'],
                "describe"    => $r['describe'],
                "file"        => $r['file'],
                "modify_by"   => $r['modify_by'],
                "modify_date" => $r['modify_date'],
                "message" => "OK"
            );
            array_push($arr, $res);
        }
        $data = json_encode($arr, JSON_HEX_TAG);
        echo $data;
    }
    else{
        $res = array(
            "message"  => "Not Found",
            "code"     => 404
        );
        echo "[".json_encode($res)."]";
    }
    

