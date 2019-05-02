<?php
    session_start();
    error_reporting(0);
    $module = $_GET['module'];    
    function brd($module){
        if($module == "syllabus"){
            $link = "<a href='?'>Home</a>&nbsp; / Syllabus";
        }
        if($module == "recomended_book"){
            $link = "<a href='?'>Home</a>&nbsp; / Recomended Book";
        }
        if($module == "qa"){
            $link = "<a href='?'>Home</a>&nbsp; / Questions &amp; Answer";
        }
        if($module == "tutorial"){
            $link = "<a href='?'>Home</a>&nbsp; / Tutorial";
        }
        if($module == "top_news"){
            $link = "<a href='?'>Home</a>&nbsp; / Top News";
        }
        if($module == "group_chat"){
            $link = "<a href='?'>Home</a>&nbsp; / Gropus Chat";
        }
        if($module == "univ_coll"){
            $link = "<a href='?'>Home</a>&nbsp; / Universities Collection";
        }
        if($module == "addSyllabus"){
            $link = "<a href='?'>Home</a>&nbsp; / &nbsp;<a href='?module=syllabus'>Syllabus</a> &nbsp; / Add Syllabus";
        }        
        echo $link;
    }
    
    function _redirectTo($page){
        header("location: $page");
    }

    function infoMsg(){  
        $msg = $_GET['msg'];      
        if($msg == "err_login"){
            echo '<div class="alert alert-warning" style="border-radius: 0px !important;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                    <h3 class="text-warning"><i class="icon-info"></i> Warning</h3> Username or your Password incorrect!
                  </div>';
        }        
        
        elseif($msg == "logout"){
            echo '<div class="alert alert-success" style="border-radius: 0px !important;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                    <h3 class="text-success"><i class="icon-check"></i> Info</h3> Your successfull Sign-Out from Dashboard Page.
                  </div>';
        }
        elseif($msg == "err_access"){
            echo '<div class="alert alert-warning" style="border-radius: 0px !important;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                    <h3 class="text-warning"><i class="icon-info"></i> Warning</h3> Login first to access Dashboard Page!
                  </div>';
        }
        else{
            echo '';
        }       
    }

    function UserLogin(){
        echo $_SESSION['user_name'];
    }

    function UserToken(){
        echo $_SESSION['token'];
    }

    function UserNameLogin(){
        echo $_SESSION['name'];
    }


?>