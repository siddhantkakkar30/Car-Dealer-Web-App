<div class="wrap-box" ><!--Start Box-->
				<div class="zerogrid">
					<div class="header">
						<h2>LATEST CARS</h2>
					</div>
					<div class="row">
					
					<?php 
    		require_once('Connection.php');
    		$sel_query="SELECT ci.CarID,ci.FeatureSet,ci.Title,ci.Price,(SELECT cimg.CImgUrl FROM zbc_carimage as cimg WHERE  ci.CarID=cimg.CarID LIMIT 1) As 'CImgUrl',ccd.Make,ccd.Model,ccd.Registration,ccd.Gear,ccd.Mileage FROM zbc_carinfo ci
    		INNER JOIN zbc_cardetails ccd on ccd.CDID=ci.CDID order by ci.CarID";
    		$result = mysqli_query($con,$sel_query);
    		while($row = mysqli_fetch_assoc($result))
    		{
		?>	
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="row">
									<div class="item">
										<div class="col-1-3">
											<div class="item-container">
												<a href="Index_About.php">
													<div class="item-caption">
														<div class="item-caption-inner">
															<div class="item-caption-inner1">
																	<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
															</div>
														</div>
													</div>
													<img src="images/car7.jpg" />
												</a>
											</div>
										</div>
										<div class="col-2-3">
											<div class="wrap-col">
												<div class="item-info">
													<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php  echo $row ['Price'];?><br/>
										<?php  echo $row ['FeatureSet'];?>
										</p>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>	
							
							
							
							
							
							
							 
							 <div class="wrap-col">
								<div class="row">
									<div class="item">
										<div class="col-1-3">
											<div class="item-container">
												<a href="Index_About.php">
													<div class="item-caption">
														<div class="item-caption-inner">
															<div class="item-caption-inner1">
																	<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
															</div>
														</div>
													</div>
													<img src="images/car8.jpg" />
												</a>
											</div>
										</div>
										<div class="col-2-3">
											<div class="wrap-col">
												<div class="item-info">
													<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php  echo $row ['Price'];?><br/>
										<?php  echo $row ['FeatureSet'];?>
										</p>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
						</div>	
								
								
						<div class="wrap-col">
								<div class="row">
									<div class="item">
										<div class="col-1-3">
											<div class="item-container">
												<a href="Index_About.php">
													<div class="item-caption">
														<div class="item-caption-inner">
															<div class="item-caption-inner1">
																	<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
															</div>
														</div>
													</div>
													<img src="images/car7.jpg" />
												</a>
											</div>
										</div>
										<div class="col-2-3">
											<div class="wrap-col">
												<div class="item-info">
													<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php  echo $row ['Price'];?><br/>
										<?php  echo $row ['FeatureSet'];?>
										</p>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>	
					
					
					
					
					<div class="wrap-col">
								<div class="row">
									<div class="item">
										<div class="col-1-3">
											<div class="item-container">
												<a href="Index_About.php">
													<div class="item-caption">
														<div class="item-caption-inner">
															<div class="item-caption-inner1">
																	<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
															</div>
														</div>
													</div>
													<img src="images/car8.jpg" />
												</a>
											</div>
										</div>
										<div class="col-2-3">
											<div class="wrap-col">
												<div class="item-info">
													<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php  echo $row ['Price'];?><br/>
										<?php  echo $row ['FeatureSet'];?>
										</p>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>	
							
								
								<?php 
    		} 
    		?>
								
								
								
								
    		</div>
    		
    		
						<div id="sidebar" class="col-1-3">
							<div class="wrap-col">
								<!---- Start Widget ---->
								<div class="widget">
									<div class="wid-header">
										<h5>About Us</h5>
									</div>
									<div class="wid-content">
										<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. </p>
										<a href="#">Read More About Us</a>
									</div>
								</div>
								<!---- Start Widget ---->
								<div class="widget wid-post">
									<div class="wid-header">
										<h5>Latest Posts</h5>
									</div>
									<div class="wid-content">
										<div class="post">
											<a href="Index_About.php"><img src="images/car8.jpg"/></a>
											<div class="wrapper">
											  <h5><a href="Index_About.php">Lorem ipsum dolor</a></h5>
											   <span>$25 - $26</span>
											</div>
										</div>
										<div class="post">
											<a href="Index_About.php"><img src="images/car9.jpg"/></a>
											<div class="wrapper">
											  <h5><a href="Index_About.php">Lorem ipsum dolor</a></h5>
											  <span>$25 - $26</span>
											</div>
										</div>
										<div class="post">
											<a href="Index_About.php"><img src="images/car10.jpg"/></a>
											<div class="wrapper">
											  <h5><a href="Index_About.php">Lorem ipsum dolor</a></h5>
											   <span>$25 - $26</span>
											</div>
										</div>
									</div>
								</div>
								<!---- Start Widget ---->
								<div class="widget">
									<div class="wid-header">
										<h5>SUBSCRIBE</h5>
									</div>
									<div class="wid-content">
										<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure . </p>
										<a href="#" class="button bt1">Subscribe</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		