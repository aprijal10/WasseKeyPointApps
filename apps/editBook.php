<?php
    require_once "setMsg.php";
    require_once "../config/config.php";
    $t = SQLQuery('_tbl_recomendedbook', $_GET['id'], 'id'); 
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Edit Recomended Book</h4>                                
                                <form class="mt-4" method="POST" action="changeRecomendedBook.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Recomended Book Title</label>
                                        <input type="text" class="form-control" name="title" id="title" value="<?php echo $t['title']; ?>" aria-describedby="titleHelp" placeholder="Enter Recomended Book Title">                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="desciption">Description</label>
                                        <textarea name="desc" id="desc" class="summernote"><?php echo $t['describe']; ?></textarea>
                                    </div>              
                                    <div class="form-group">
                                        <img src="<?php echo $t['book_picture']; ?>" style="width: 120px;" /><br />
                                        <label for="fupload">Book Cover (JPG/JPEG Format)</label><br />
                                        <input type="file" name="cover_book" accept=".jpg">
                                    </div>                      
                                    <div class="form-group">
                                        <div class="alert alert-danger" style="padding: 10px; border-radius: 0px !important; font-size: 12pt;">
                                            <?php
                                                echo $t['file'];
                                            ?>
                                        </div> 
                                        <br />
                                        <label for="fupload">File Recomended Book (PDF Format)</label><br />
                                        <input type="file" name="file" accept=".pdf">
                                        <input type="hidden" name="id" value="<?php echo $t['id']; ?>" />
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" onClick="history.back();" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-info">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>