<?php 
include "Header.php";

require_once('Connection.php');
?>
  <div id="page-wrapper">    
  <div class="row">
    
          <div class="col-lg-12">
                                    <h1 class="page-header">Update/Delete Customers</h1>
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
                                        <th>Customer ID</th>
                                        <th>CName</th>
                                        <th>CAddress</th>
                                        <th>CCity</th>
                                        <th>CPhone</th>
                                        <th>Email ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php 
									$n=1;
									//$sel_query="SELECT empinfo.EmpNo,empinfo.EmpName,empinfo.Salary,dept.DeptName from empinfo,dept WHERE empinfo.Deptno=dept.Deptno order by empinfo.EmpNo";
									$sel_query="SELECT * FROM customer";
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
                                    
                                        <td><?php echo $row['CustomerID'];?></td>
                                        <td><?php echo $row['CName'];?></td>
                                        <td><?php echo $row['CAddress'];?></td>
                                         <td><?php echo $row['CCity'];?></td>
                                          <td><?php echo $row['CPhone'];?></td>
                                           <td><?php echo $row['CEmailID'];?></td>
                                        
                                        <td class="center">
										<a href="UpdateCustomerAction.php?CustomerID=<?php echo $row['CustomerID'];?>">
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
         </div>   
            </center>

<?php 
include "Footer.php";
?>