<?php
    require_once "setMsg.php";
    require_once "../config/config.php";
    $t = SQLQuery('_tbl_syllabus', $_GET['id'], 'id'); 
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Edit Syllabus</h4>                                
                                <form class="mt-4" method="POST" action="changeSyllabus.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Syllabus Title</label>
                                        <input type="text" class="form-control" value="<?php echo $t['title']; ?>" name="title" id="title" aria-describedby="titleHelp" placeholder="Enter Syllabus Title">                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="desciption">Description</label>
                                        <textarea name="desc" id="desc" class="summernote"><?php echo $t['describe']; ?></textarea>
                                    </div>                                    
                                    <div class="form-group">
                                        <div class="alert alert-danger" style="padding: 10px; border-radius: 0px !important; font-size: 12pt;">
                                            <?php
                                                echo $t['file'];
                                            ?>
                                        </div>                                        
                                        <label for="fupload">Change File Syllabus (PDF Format) <br /><i style="color: red;">*) If file not change let this box empty.</i></label><br />
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