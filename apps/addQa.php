<?php
    require_once "setMsg.php";
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Add New Question &amp; Answers</h4>                                
                                <form class="mt-4" method="POST" action="saveQa.php">
                                    <div class="form-group">
                                        <label for="title">Category</label><br />
                                        <select name="cat" class="form-control" style="width: 190px !important;">
                                            <option value="Math">Math</option>
                                            <option value="English">English</option>
                                        </select>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="desciption">Question Text</label>
                                        <textarea name="qt" id="qt" class="summernote"></textarea>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="desciption">Answers Text</label>
                                        <textarea name="at" id="at" class="summernote1"></textarea>
                                    </div>                                    
                                    <div class="btn-group">
                                        <button type="button" onClick="history.back();" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-info">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>