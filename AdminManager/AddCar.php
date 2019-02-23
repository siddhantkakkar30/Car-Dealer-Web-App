
<?php
include 'Header.php';
?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add a New Car</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Enter Car Details 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="get" action="AddCarAction.php">
                                    
                                      <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control"  placeholder="Enter title" name="txtTitle" required>
                                           
                                        </div>
                                    
                                      <div class="form-group">
                                            <label>Feature Set</label>
                                            <input class="form-control"  placeholder="Enter Feature Set"  name="txtFeatureSet" required>
                                           
                                        </div>
                                        
                                           <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control"  placeholder="Enter Vehicle Description" name="txtDescription" required>
                                           
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>CDID</label>
                                            <input class="form-control"  placeholder="Enter CDID" name="txtCdid" required>
                                           
                                        </div>
                                        
                                          <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control"  placeholder="Enter Price" name="txtPrice" required>
                                           
                                        </div>
                                       
                                       
                                        <div class="form-group">
                                            <label>Customer ID</label>
                                            <input class="form-control"  placeholder="Enter Customer ID" name="txtCustomerID" required>
                                           
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Agent ID</label>
                                            <input class="form-control"  placeholder="Enter Agent ID" name="txtAgentID" required>
                                           
                                        </div>
                                      
                                        
                                     
                                     
                                     
                                      
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                       
                                    </form>
                                </div>
                        <?php 
                        include 'Footer.php';
                        ?>
                                