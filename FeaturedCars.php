<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div id="main-content">
			<div class="wrap-box"><!--Start Box-->
				<div class="zerogrid">
					<div class="header">
						<h2>FEATURED CARS</h2>
					</div>
					<div class="row">
					<?php 
    		require_once('Connection.php');
    		$sel_query="SELECT ci.CarID,ci.Title,ci.Price,(SELECT cimg.CImgUrl FROM zbc_carimage as cimg WHERE  ci.CarID=cimg.CarID LIMIT 1) As 'CImgUrl',ccd.Make,ccd.Model,ccd.Registration,ccd.Gear,ccd.Mileage FROM zbc_carinfo ci
    		INNER JOIN zbc_cardetails ccd on ccd.CDID=ci.CDID order by ci.CarID";
    		$result = mysqli_query($con,$sel_query);
    		while($row = mysqli_fetch_assoc($result))
    		{
		?>	
					
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="item t-center">
									<div class="item-container">
										<a href="Index_About.php">
											<div class="item-caption">
												<div class="item-caption-inner">
														<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
													<div class="item-caption-inner1">
													</div>
												</div>
											</div>
										<img src="images/car1.jpg"/>
										</a>
									</div>
									<div class="item-info">
										<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php  echo $row ['Price'];?></p>
									</div>
								</div>
								
							</div>
						</div>
												
												
												
													<div class="col-1-3">
							<div class="wrap-col">
								<div class="item t-center">
									<div class="item-container">
										<a href="Index_About.php">
											<div class="item-caption">
												<div class="item-caption-inner">
														<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
													<div class="item-caption-inner1">
													</div>
												</div>
											</div>
										<img src="images/car2.jpg"/>
										</a>
									</div>
									<div class="item-info">
										<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php echo $row['Price'];?></p>
									</div>
								</div>
								
							</div>
						</div>
												
													<div class="col-1-3">
							<div class="wrap-col">
								<div class="item t-center">
									<div class="item-container">
										<a href="Index_About.php">
											<div class="item-caption">
												<div class="item-caption-inner">
														<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
													<div class="item-caption-inner1">
													</div>
												</div>
											</div>
										<img src="images/car3.jpg"/>
										</a>
									</div>
									<div class="item-info">
										<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php echo $row['Price'];?></p>
									</div>
								</div>
								
							</div>
						</div>
						
						
						   
													<div class="col-1-3">
							<div class="wrap-col">
								<div class="item t-center">
									<div class="item-container">
										<a href="Index_About.php">
											<div class="item-caption">
												<div class="item-caption-inner">
														<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
													<div class="item-caption-inner1">
													</div>
												</div>
											</div>
										<img src="images/car4.jpg"/>
										</a>
									</div>
									<div class="item-info">
										<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php echo $row['Price'];?></p>
									</div>
								</div>
								
							</div>
						</div>
						
						
						
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="item t-center">
									<div class="item-container">
										<a href="Index_About.php">
											<div class="item-caption">
												<div class="item-caption-inner">
														<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
													<div class="item-caption-inner1">
													</div>
												</div>
											</div>
										<img src="images/car5.jpg"/>
										</a>
									</div>
									<div class="item-info">
										<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php echo $row['Price'];?></p>
									</div>
								</div>
								
							</div>
						</div>
						
						
						
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="item t-center">
									<div class="item-container">
										<a href="Index_About.php">
											<div class="item-caption">
												<div class="item-caption-inner">
														<span><?php echo $row['Mileage']."/". $row['Make']."/". $row['Mileage']."/". $row['Model']."/". $row['Registration']."/". $row['Gear'];?> </span>
													<div class="item-caption-inner1">
													</div>
												</div>
											</div>
										<img src="images/car1.jpg"/>
										</a>
									</div>
									<div class="item-info">
										<a href="Index_About.php"><h3><?php echo $row['Title'];?></h3></a>
										<p><?php echo $row['Mileage'];?> &nbsp; <?php echo $row['Price'];?></p>
									</div>
								</div>
								
							</div>
						</div>
												
												
												
												
					
					<?php 
    		}
    		
    		?>
					
					
				
					
					
					
					
				</div>
