<?php
include 'Header.php';
?>


<
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Agent</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Enter your  Details Here
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form method="get" action="AddAgentAction.php">
                                   
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Write your name here" name="txtAName" required>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Enter your address " name="txtAAddress" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>City</label>
                                            <input class="form-control" placeholder="Enter your city" name="txtACity" required>
                                           
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" placeholder="Phone Number" type="number" name="txtAPhone" required>
                                           
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input class="form-control" placeholder="Mobile Number"type="number" name="txtAMobile" required>
                                           
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Fax</label>
                                            <input class="form-control" placeholder="Enter  fax" name="txtAFax" required>
                                           
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input class="form-control" type="Email" placeholder="Write email" name="txtAEmailID"required>
                                           
                                        </div>
                                      
                                       
                                       
                                        
                                     
                                     
                                    
                                     
                                        <button type="submit" class="btn btn-warning"> </a>Submit </button>
                                       
                                    </form>
                                </div>
                        <?php 
                        include 'Footer.php';
                        ?>
                                