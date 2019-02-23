<?php
include 'Header.php';
?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Slider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Enter the details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                     <form method="get" action="AddSliderAction.php">
                                     
                                     <div class="form-group">
                                            <label>Slider Image Url</label>
                                            <input class="form-control" placeholder="Enter text" name="txtImageUrl" required>
                                           
                                        </div>
                                     
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" placeholder="Enter Slider Title" name="txtTitle" required>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <input class="form-control" placeholder="Write your content" name="txtContent" required>
                                        </div>

                                      
                                        <button type="submit" class="btn btn-danger">Submit </button>
                                       
                                    </form>
                                </div>
                        <?php 
                        include 'Footer.php';
                        ?>

                                