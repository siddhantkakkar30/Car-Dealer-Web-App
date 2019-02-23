<?php
include 'Header.php';
?>


<
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Customer</h1>
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
                                <form method="get" action="AddCustomerAction.php">
                                   
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" placeholder="Write your name here" name="txtCName" required>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Enter your address " name="txtCAddress" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>City</label>
                                            <input class="form-control" placeholder="Enter your city" name="txtCCity" required>
                                           
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" placeholder="Phone Number" type="number" name="txtCPhone" required>
                                           
                                        </div>
                                        
                                       
                                        
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input class="form-control" type="Email" placeholder="Write email" name="txtCEmailID" required>
                                           
                                        </div>
                                      
                                       
                                       
                                        
                                     
                                     
                                    
                                     
                                        <button type="submit" class="btn btn-warning"> </a>Submit </button>
                                       
                                    </form>
                                </div>
                        <?php 
                        include 'Footer.php';
                        ?>
                                