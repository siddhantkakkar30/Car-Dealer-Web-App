<?php 
include 'Header.php';

require_once('Connection.php');
?>
<div id="page-wrapper">    
  <div class="row">
    
          <div class="col-lg-12">
                                    <h1 class="page-header">Update/Delete Agent</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
             
                
                  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit the Tables
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Agent ID</th>
                                        <th>Agent Name</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                        <th>Fax</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php 
									$n=1;
									//$sel_query="SELECT empinfo.EmpNo,empinfo.EmpName,empinfo.Salary,dept.DeptName from empinfo,dept WHERE empinfo.Deptno=dept.Deptno order by empinfo.EmpNo";
									$sel_query="SELECT * FROM agent";
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
                                    
                                        <td><?php echo $row['AgentID'];?></td>
                                        <td><?php echo $row['AName'];?></td>
                                        <td><?php echo $row['AAddress'];?></td>
                                         <td><?php echo $row['ACity'];?></td>
                                         <td><?php echo $row['APhone'];?></td>
                                         <td><?php echo $row['AMobile'];?></td>
                                         <td><?php echo $row['AFax'];?></td>
                                          <td><?php echo $row['AEmailID'];?></td>
                                             
                                         
                                         
                                         
                                         
                                         
                                        <td class="center">
										<a href="UpdateAgentAction.php?AgentID=<?php echo $row['AgentID'];?>">
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
          </div>
          
    

<?php 
include 'Footer.php';
?>