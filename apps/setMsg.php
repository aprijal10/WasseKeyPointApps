<?php
    function setMsg(){  
        $msg = $_GET['msg'];      
        if($msg == "err_add"){
            echo '<div class="alert alert-warning" style="border-radius: 0px !important;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                    <h3 class="text-warning"><i class="icon-info"></i> Error</h3> Data not save, something missing or file format not allowed.
                  </div>';
        }        
        
        elseif($msg == "success"){
            echo '<div class="alert alert-success" style="border-radius: 0px !important;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                    <h3 class="text-success"><i class="icon-check"></i> Success</h3> Data successfull saved.
                  </div>';
        }
        elseif($msg == "err_file"){
            echo '<div class="alert alert-danger" style="border-radius: 0px !important;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                    <h3 class="text-danger"><i class="icon-info"></i> Error</h3> File can\'t upload, File format not allowed or file too big.
                  </div>';
        }
        elseif($msg == "err_save"){
            echo '<div class="alert alert-danger" style="border-radius: 0px !important;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">x</span> </button>
                    <h3 class="text-danger"><i class="icon-info"></i> Error</h3> Something went wrong, please check your text insert, if any <b style="color: red;">unicode text format</b> remove it.
                  </div>';
        }
        else{
            echo '';
        }       
    }
?>