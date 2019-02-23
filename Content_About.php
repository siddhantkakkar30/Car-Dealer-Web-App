<?php
?>

                      <div class="wrap-box">
					<div class="zerogrid">
						<div class="row">
							<div class="col-2-3">
								<div class="wrap-col">
									<div class="info">
										<h2 class="h3">Feature set</h2>
										
										<p>ABS, Auxiliary heating, Central locking, Cruise control, Electric heated seats, Electric windows, ESP, Four wheel drive, Immobilizer, Leather seats, Navigation system, Parking sensors, Power Assisted Steering, Sunroof, Trailer coupling, Xenon headlights</p>
									</div><!-- /.post -->
										
										<div class="info">
										<h2 class="h3">Vehicle Description</h2>
										
										<p>Black alloys, Sat Nav, Bluetooth, 4 seats, Ceramic Brakes, Power boot, Soft closing doors, Alcantara roof lining,
										 Double glazing, Keyless entry, Keyless start, Carbon fibre dash and door inserts,
										 IPod connection. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed </p> 
									</div><!-- /.post -->
								</div>
							</div>
										
											      <div class="col-1-3">
								                    <div class="wrap-col">
									                  <div class="info">
										                <h3>Contact details</h3>
										                
										                <?php 
    		                                      require_once('Connection.php');
    		                                      $sel_query="SELECT * FROM contact_details";
    		                                      $result = mysqli_query($con,$sel_query);
    		                                      while($row = mysqli_fetch_assoc($result))
    		                                       {
    		                                           ?>
										                <ul class="specs">
	                                                         
    		                                          <li> <strong> Name</strong><span><?php echo $row['Name'];?></span><br/></li>
    		                                         <li> <strong> Phone</strong><span><?php echo $row['Phone'];?></span><br/></li>
    		                                          <li> <strong> Cell Phone</strong><span><?php echo $row['CellPhone'];?></span><br/></li>
    		                                          <li> <strong> Fax</strong><span><?php echo $row['Fax'];?></span><br/></li>
    		                                          <li> <strong> E-mail</strong><span><?php echo $row['Email'];?></span><br/></li>
    		                                         <li> <strong> Postcode</strong><span><?php echo $row['Postcode'];?></span><br/></li>
    		                                          <li> <strong> Address</strong><span><?php echo $row['Address'];?></span><br/></li>
    		                                          <li> <strong> City</strong><span><?php echo $row['City'];?></span><br/></li>
    		                                      <?php 
    		                                       }
    		                                      ?>										           
										</ul>
									</div>
								</div>
							</div>
						  </div><!-- /.post -->
                         </div>
                        </div>
                       </div>
                      </div>
                     </div>
                   </section>   