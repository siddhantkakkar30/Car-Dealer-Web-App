<?php 
include "Header.php";

require_once('Connection.php');
?>
    
  <div class="row">
    <div class="col-lg-3">
    </div>
          <div class="col-lg-9">
                                    <h1 class="page-header">Update/Delete Sliders</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-3"></div>
                
                  <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update/Delete Sliders
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php 
									$n=1;
									//$sel_query="SELECT empinfo.EmpNo,empinfo.EmpName,empinfo.Salary,dept.DeptName from empinfo,dept WHERE empinfo.Deptno=dept.Deptno order by empinfo.EmpNo";
									$sel_query="SELECT * FROM slider";
									$result = mysqli_query($con,$sel_query);
									while($row = mysqli_fetch_assoc($result))
									{
										if($n%2==0)
										{
										echo "<tr class='odd gradeX'>";
										}
										else
										{
										echo "<tr class='even gradeX'>";
										}
									?>
                                    
                                        <td><?php echo $row['zSId'];?></td>
                                        <td><?php echo $row['zTitle'];?></td>
                                        <td><?php echo $row['zContent'];?></td>
                                        <td><img src="<?php echo $row['zImageUrl'];?>" width="150px"/> </td>
                                        <td class="center">
										<a href="UpdateSliderAction.php?zSID=<?php echo $row['zSId'];?>">
										<input type="button" id="btnEdit" value="Edit" class="btn btn-info"/>
										</a> | <a href=#><input type="button" id="btnDelete" value="Delete" class="btn btn-danger"/></a></td>
                                    
                                    <?php 
									echo "</tr>";
									}
									?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </center>

<?php 
include "Footer.php";
?>