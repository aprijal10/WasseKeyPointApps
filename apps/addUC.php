<?php
    require_once "setMsg.php";
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Add New Universities Collection</h4>                                
                                <form class="mt-4" method="POST" action="saveUC.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Univ. Name</label>
                                        <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter University Name">                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="desciption">Description</label>
                                        <input type="text" name="desc" id="desc" class="form-control" />
                                    </div>      
                                    <div class="form-group">
                                        <label for="title">Link Website</label>
                                        <input type="text" class="form-control" name="lc" id="lc" aria-describedby="titleHelp" placeholder="Enter Link Website Ex: https://www.ui.ac.id/en">
                                    </div>                              
                                    <div class="form-group">
                                        <label for="fupload">Univ. Logo (JPG/JPEG/PNG Format)</label><br />
                                        <input type="file" name="file" accept="image/*">
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" onClick="history.back();" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-info">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>