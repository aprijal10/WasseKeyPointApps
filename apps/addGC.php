<?php
    require_once "setMsg.php";
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Add New Groups Chat</h4>                                
                                <form class="mt-4" method="POST" action="saveGC.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Groups Chat Title</label>
                                        <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter Groups Chat Title">                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="desciption">Description</label>
                                        <input type="text" name="desc" id="desc" class="form-control" />
                                    </div>      
                                    <div class="form-group">
                                        <label for="title">Groups Chat Link</label>
                                        <input type="text" class="form-control" name="lc" id="lc" aria-describedby="titleHelp" placeholder="Enter Groups Chat Link">                                        
                                    </div>                              
                                    <div class="form-group">
                                        <label for="fupload">Groups Chat Picture (JPG/JPEG/PNG Format)</label><br />
                                        <input type="file" name="file" accept="image/*">
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" onClick="history.back();" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-info">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>