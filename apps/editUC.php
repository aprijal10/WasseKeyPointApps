<?php
    require_once "setMsg.php";
    require_once "../config/config.php";
    $t = SQLQuery('_tbl_univ', $_GET['id'], 'id'); 
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Edit Universities Collection</h4>                                
                                <form class="mt-4" method="POST" action="changeUC.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Univ. Name</label>
                                        <input type="text" class="form-control" value="<?php echo $t['univ_name']; ?>" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter University Name">                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="desciption">Description</label>
                                        <input type="text" name="desc" value="<?php echo $t['describe']; ?>" id="desc" class="form-control" />
                                    </div>      
                                    <div class="form-group">
                                        <label for="title">Link Website</label>
                                        <input type="text" class="form-control" value="<?php echo $t['link']; ?>" name="lc" id="lc" aria-describedby="titleHelp" placeholder="Enter Link Website Ex: https://www.ui.ac.id/en">
                                    </div>                              
                                    <div class="form-group">
                                        <?php
                                            echo "
                                            <img src='../$t[univ_picture]' style='width: 84px; height: 84px; border-radius: 100%;' />
                                            ";
                                        ?>
                                        <br />
                                        <label for="fupload">Univ. Logo (JPG/JPEG/PNG Format)</label><br />
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