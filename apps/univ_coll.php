<div class="row">
    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="card-title">Universities Collection Data</h4>                                
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-success" onClick="window.location.href='?module=addUC'"><i class="icon-plus"></i> Add New Universities Collection</button>
                                            <button class="btn btn-secondary" type="button" onClick="location.reload();"><i class="icon-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-striped" style="margin-top: 10px;" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>#</th>
                                            <th>Univ. Name</th>
                                            <th>Description</th>
                                            <th>Modify</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM _tbl_univ ORDER BY id DESC";
                                            $h   = mysql_query($sql);
                                            $no  = 0;
                                            while($r = mysql_fetch_array($h)){
                                                $no++;
                                                    echo "
                                                        <tr>
                                                            <td scope='row'>$no.</td>
                                                            <td><img src='../$r[univ_picture]' style='width: 48px; height: 48px; border-radius: 100%;' /></td>
                                                            <td><b><a href='$r[link]' target='_blank'>$r[univ_name]</a></b></td>
                                                            <td>$r[describe]</td>
                                                            <td>$r[modify_date] <br />by: $r[modify_by]</td>
                                                            <td>
                                                            <div class='btn-group' role='group' aria-label='Basic example'>                                                                
                                                                <a href='?module=editUC&id=$r[id]' class='btn btn-sm waves-effect waves-light btn-info'><i class='icon-note'></i></a>
                                                                <a href='delUC.php?id=$r[id]&file=$r[univ_picture]' onClick=\"return confirm('Do you want to delete this data [$r[univ_name]] ?')\" class='btn btn-sm waves-effect waves-light btn-danger'><i class='icon-trash'></i></a>
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