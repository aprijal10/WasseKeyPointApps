<div class="row">
    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="card-title">Question &amp; Answers Data</h4>                                
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-success" onClick="window.location.href='?module=addQa'"><i class="icon-plus"></i> Add New Question &amp; Answers</button>
                                            <button class="btn btn-secondary" type="button" onClick="location.reload();"><i class="icon-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-striped" style="margin-top: 10px;" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Category</th>
                                            <th>Question Text</th>                                            
                                            <th>Modify</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM _tbl_questionanswer ORDER BY id DESC";
                                            $h   = mysql_query($sql);
                                            $no  = 0;
                                            while($r = mysql_fetch_array($h)){
                                                if($r['category'] == "Math"){
                                                    $cat = "<div class='label label-table label-danger'><b>$r[category]</b></div>";
                                                }
                                                else{
                                                    $cat = "<div class='label label-table label-info'><b>$r[category]</b></div>";
                                                }
                                                $no++;
                                                    echo "
                                                        <tr>
                                                            <td scope='row'>$no.</td>
                                                            <td>$cat</td>
                                                            <td>$r[question_text]</td>                                                            
                                                            <td>$r[modify_date] <br />by: $r[modify_by]</td>
                                                            <td>
                                                            <div class='btn-group' role='group' aria-label='Basic example'>                                                                
                                                                <a href='?module=editQa&id=$r[id]' title='View and Edit' class='btn btn-sm waves-effect waves-light btn-info'><i class='icon-note'></i></a>
                                                                <a href='delQa.php?id=$r[id]' onClick=\"return confirm('Do you want to delete this data ?')\" class='btn btn-sm waves-effect waves-light btn-danger'><i class='icon-trash'></i></a>
                                                            </div>
                                                            </td>
                                                        </tr>
                                                         ";
                                            }                                            
                                        ?>                                                                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                
</div>