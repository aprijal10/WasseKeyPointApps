<?php
    require_once "setMsg.php";
    require_once "../config/config.php";
    $t = SQLQuery('_tbl_questionanswer', $_GET['id'], 'id'); 
?>

                        <div class="card">
                            <?php 
                                setMsg();
                            ?>
                            <div class="card-body">                                
                                <h4 class="card-title">Edit Question &amp; Answers</h4>                                
                                <form class="mt-4" method="POST" action="changeQa.php">
                                    <div class="form-group">
                                        <label for="title">Category</label><br />
                                        <select name="cat" class="form-control" style="width: 190px !important;">
                                            <?php
                                                if($t['category'] == "Math"){
                                                    echo '
                                                            <option value="Math" selected>Math</option>
                                                            <option value="English">English</option>
                                                         ';
                                                }
                                                else{
                                                    echo '
                                                            <option value="Math">Math</option>
                                                            <option value="English" selected>English</option>
                                                         ';
                                                }                                                
                                            ?>                                            
                                        </select>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="desciption">Question Text</label>
                                        <textarea name="qt" id="qt" class="summernote"><?php echo $t['question_text']; ?></textarea>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="desciption">Answers Text</label>
                                        <textarea name="at" id="at" class="summernote1"><?php echo $t['answer_text']; ?></textarea>
                                        <input type="hidden" name="id" value="<?php echo $t['id']; ?>" />
                                    </div>                                    
                                    <div class="btn-group">
                                        <button type="button" onClick="history.back();" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-info">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>