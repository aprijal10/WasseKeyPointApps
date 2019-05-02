<?php
    require_once "setMsg.php";
    require_once "../config/config.php";
    $t = SQLQuery('_tbl_groupchat', $_GET['id'], 'id'); 
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Edit Groups Chat</h4>                                
                                <form class="mt-4" method="POST" action="changeGC.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Groups Chat Title</label>
                                        <input type="text" value="<?php echo $t['chat_title']; ?>" class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter Groups Chat Title">                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="desciption">Description</label>
                                        <input type="text" name="desc" id="desc" class="form-control" value="<?php echo $t['describe']; ?>" />
                                    </div>      
                                    <div class="form-group">
                                        <label for="title">Groups Chat Link</label>
                                        <input type="text" class="form-control" value="<?php echo $t['link_chat']; ?>" name="lc" id="lc" aria-describedby="titleHelp" placeholder="Enter Groups Chat Link">                                        
                                    </div>                              
                                    <div class="form-group">
                                        <?php
                                            echo "
                                            <img src='$t[chat_picture]' style='width: 84px; height: 84px; border-radius: 100%;' />
                                            ";
                                        ?>
                                        <br />
                                        <label for="fupload">Groups Chat Picture (JPG/JPEG/PNG Format)</label><br />
                                        <i style="color: red;">*) If picture not change let this box empty.</i><br />
                                        <input type="file" name="file" accept="image/*">
                                        <input type="hidden" name="id" value="<?php echo $t['id']; ?>" />
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" onClick="history.back();" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-info">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>