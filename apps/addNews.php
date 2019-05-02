<?php
    require_once "setMsg.php";
    $news_date = date('Y-m-d h:m:s');
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Add News</h4>                                
                                <form class="mt-4" method="POST" action="saveNews.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title" style="font-weight: bold;">News Title</label>
                                        <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter News Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="desciption" style="font-weight: bold;">Content</label>
                                        <textarea name="content" id="content" class="summernote"></textarea>
                                    </div>              
                                    <div class="form-group">
                                        <label for="fupload" style="font-weight: bold;">News Image</label><br />
                                        <input type="file" name="picture" accept=".jpg">
                                    </div>                      
                                    <div class="form-group">
                                        <label for="fupload" style="font-weight: bold;">Author</label><br />
                                        <input type="text" class="form-control" name="author" id="author" aria-describedby="titleHelp" placeholder="Enter News Author">
                                    </div>
                                    <div class="form-group">
                                        <label for="fupload" style="font-weight: bold;">News Date</label><br />
                                        <input type="text" value="<?php echo $news_date; ?>" class="form-control" name="date_news" id="date_news" aria-describedby="titleHelp" style="width: 200px !important;">
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" onClick="history.back();" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-info">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>