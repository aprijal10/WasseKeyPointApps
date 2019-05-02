<div class="row">
    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="card-title">Top News Data</h4>                                
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-success" onClick="window.location.href='?module=addNews'"><i class="icon-plus"></i> Add News</button>
                                            <button class="btn btn-secondary" type="button" onClick="location.reload();"><i class="icon-refresh"></i> Refresh</button>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-striped" style="margin-top: 10px;" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>#</th>
                                            <th>News Title</th>
                                            <th>Author</th>
                                            <th>News Date</th>
                                            <th>Modify</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM _tbl_news ORDER BY id DESC";
                                            $h   = mysql_query($sql);
                                            $no  = 0;
                                            while($r = mysql_fetch_array($h)){
                                                $no++;
                                                    echo "
                                                        <tr>
                                                            <td scope='row'>$no.</td>
                                                            <td><img src='$r[picture]' style='width: 70px; height: 60px;' /></td>
                                                            <td><b>$r[title]</b></td>
                                                            <td>$r[author]</td>
                                                            <td>$r[date_news]</td>                                                            
                                                            <td>$r[modify_date] <br />by: $r[modify_by]</td>
                                                            <td>
                                                            <div class='btn-group' role='group' aria-label='Basic example'>                                                                
                                                                <a href='?module=editNews&id=$r[id]' class='btn btn-sm waves-effect waves-light btn-info'><i class='icon-note'></i></a>
                                                                <a href='delNews.php?id=$r[id]&cover=$r[picture]' onClick=\"return confirm('Do you want to delete this data [$r[title]] ?')\" class='btn btn-sm waves-effect waves-light btn-danger'><i class='icon-trash'></i></a>
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