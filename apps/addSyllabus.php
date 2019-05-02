<?php
    require_once "setMsg.php";
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Add New Syllabus</h4>                                
                                <form class="mt-4" method="POST" action="saveSyllabus.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Syllabus Title</label>
                                        <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter Syllabus Title">                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="desciption">Description</label>
                                        <textarea name="desc" id="desc" class="summernote"></textarea>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="fupload">File Syllabus (PDF Format)</label>
                                        <input type="file" name="file" accept=".pdf">
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" onClick="history.back();" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-info">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>