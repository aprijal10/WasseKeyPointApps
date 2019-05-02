<div class="row">
    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="card-title">Recomended Book Data</h4>                                
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-success" onClick="window.location.href='?module=addRecomendedBook'"><i class="icon-plus"></i> Add New Recomended Book</button>
                                            <button class="btn btn-secondary" type="button" onClick="location.reload();"><i class="icon-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-striped" style="margin-top: 10px;" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>#</th>
                                            <th>Recomended Book Title</th>
                                            <th>Description</th>
                                            <th>File</th>
                                            <th>Modify</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM _tbl_recomendedbook ORDER BY title ASC";
                                            $h   = mysql_query($sql);
                                            $no  = 0;
                                            while($r = mysql_fetch_array($h)){
                                                $no++;
                                                    echo "
                                                        <tr>
                                                            <td scope='row'>$no.</td>
                                                            <td><img src='$r[book_picture]' style='width: 70px; height: 80px;' /></td>
                                                            <td><b>$r[title]</b></td>
                                                            <td>$r[describe]</td>
                                                            <td><span class='label label-danger'><b>$r[file]</b></span></td>
                                                            <td>$r[modify_date] <br />by: $r[modify_by]</td>
                                                            <td>
                                                            <div class='btn-group' role='group' aria-label='Basic example'>                                                                
                                                                <a href='?module=editBook&id=$r[id]' class='btn btn-sm waves-effect waves-light btn-info'><i class='icon-note'></i></a>
                                                                <a href='delbook.php?id=$r[id]&file=$r[file]&cover=$r[book_picture]' onClick=\"return confirm('Do you want to delete this data [$r[title]] ?')\" class='btn btn-sm waves-effect waves-light btn-danger'><i class='icon-trash'></i></a>
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