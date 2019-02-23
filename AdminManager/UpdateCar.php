<?php 
include "Header.php";

require_once('Connection.php');
?>
    <div id="page-wrapper">  
  <div class="row">
   
          <div class="col-lg-12">
                                    <h1 class="page-header">Update/Delete Car</h1>
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
                                        <th>Car ID</th>
                                        <th>Title</th>
                                        <th>Feature Set</th>
                                        <th>Description</th>
                                        <th>CDID</th>
                                        <th>Price</th>
                                        <th>Customer ID</th>
                                        <th>Agent ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php 
									$n=1;
									
									$sel_query="SELECT * FROM zbc_carinfo";
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
                                    
                                        <td><?php echo $row['CarID'];?></td>
                                        <td><?php echo $row['Title'];?></td>
                                        <td><?php echo $row['FeatureSet'];?></td>
                                         <td><?php echo $row['Description'];?></td>
                                         <td><?php echo $row['CDID'];?></td>
                                         <td><?php echo $row['Price'];?></td>
                                         <td><?php echo $row['CustomerID'];?></td>
                                          <td><?php echo $row['AgentID'];?></td>
                                             
                                         
                                         
                                         
                                         
                                         
                                        <td class="center">
										<a href="UpdateCarAction.php?CarID=<?php echo $row['CarID'];?>">
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