<?php
    require_once "setMsg.php";
    require_once "../config/config.php";
    $t = SQLQuery('_tbl_news', $_GET['id'], 'id');
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Edit News</h4>                                
                                <form class="mt-4" method="POST" action="changeNews.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title" style="font-weight: bold;">News Title</label>
                                        <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter News Title" value="<?php echo $t['title']; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="desciption" style="font-weight: bold;">Content</label>
                                        <textarea name="content" id="content" class="summernote"><?php echo $t['content']; ?></textarea>
                                    </div>              
                                    <div class="form-group">
                                        <label for="fupload" style="font-weight: bold;">News Image:</label><br />
                                        <img src="<?php echo $t['picture'] ?>" style="width: 220px;"/><br /><br />

                                        <label for="fupload" style="font-weight: bold;">Change News Image</label><br />
                                        <input type="file" name="picture" accept=".jpg">
                                    </div>                      
                                    <div class="form-group">
                                        <label for="fupload" style="font-weight: bold;">Author</label><br />
                                        <input type="text" class="form-control" name="author" id="author" aria-describedby="titleHelp" placeholder="Enter News Author" value="<?php echo $t['author']; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="fupload" style="font-weight: bold;">News Date</label><br />
                                        <input type="text" value="<?php echo $t['date_news']; ?>" class="form-control" name="date_news" id="date_news" aria-describedby="titleHelp" style="width: 200px !important;">
                                        <input type="hidden" value="<?php echo $t['id']; ?>" class="form-control" name="id" id="id" aria-describedby="titleHelp">
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" onClick="history.back();" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-info">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>