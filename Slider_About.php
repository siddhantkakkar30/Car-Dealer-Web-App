
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zBlueCar - Free Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<?php 

?>
  <section id="container">
	<div class="">
		<div class="wrap-container clearfix">
			<div id="main-content">
				<div class="wrap-box" style="background: #fff; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);"><!--Start Box-->
					<div class="zerogrid">
						<div class="header">
							<h1>FERRARI CALIFORNIA CONVERTIBLE</h1>
						</div>
                          <div class="row">
							<div class="col-2-3">
								<div class="wrap-col">
									<div class="slider">
										<!-- Slideshow -->
										<div class="callbacks_container">
											<ul class="rslides" id="slider">
												<?php 
    		                                      require_once('Connection.php');
    		                                      $sel_query="SELECT * FROM about_slider";
    		                                      $result = mysqli_query($con,$sel_query);
    		                                      while($row = mysqli_fetch_assoc($result))
    		                                       {
    		                                           ?>
    		                                           
    		                                            <li>
    		                                            
    		                                            <img src="<?php echo $row['zImageUrl'];?>" alt="" width="10%">
    		                                            </li>
    		                                            <?php 
    		                                       }
	                                                	?>
											</ul>
										</div>
										
										<div class="clear"></div>
										
									</div>
								</div>
							</div>
						
				

	
							
							
							
							         	<div class="col-1-3">
								<div class="wrap-col">
									<p class="price">&#8364;   78,400 </p>
									<?php 
    		                                      require_once('Connection.php');
    		                                      $sel_query="SELECT * FROM zbc_cardetails";
    		                                      $result = mysqli_query($con,$sel_query);
    		                                      while($row = mysqli_fetch_assoc($result))
    		                                       {
    		                                           ?>
    		                                           <ul class="specs">
    		                                           
    		                                           
    		                                            
    		                                            
    		                                          <li> <strong> Make</strong><span><?php echo $row['Make'];?></span><br/></li>
    		                                         <li> <strong> Model</strong><span><?php echo $row['Model'];?></span><br/></li>
    		                                          <li> <strong> Registration</strong><span><?php echo $row['Registration'];?></span><br/></li>
    		                                          <li> <strong> Gear</strong><span><?php echo $row['Gear'];?></span><br/></li>
    		                                          <li> <strong> Mileage</strong><span><?php echo $row['Mileage'];?></span><br/></li>
    		                                          <li> <strong> Power</strong><span><?php echo $row['Power'];?></span><br/></li>
    		                                          <li> <strong> Fuel</strong><span><?php echo $row['Fuel'];?></span><br/></li>
    		                                          <li> <strong> Gearbox</strong><span><?php echo $row['Gearbox'];?></span><br/></li>
    		                                          <li> <strong> Doors</strong><span><?php echo $row['Doors'];?></span><br/></li>
    		                                          <li> <strong> Emission</strong><span><?php echo $row['Emission'];?></span><br/></li>
    		                                          <li> <strong> Vehicle Type</strong><span><?php echo $row['VehicleType'];?></span><br/></li>
    		                                          <li> <strong> Color</strong><span><?php echo $row['Color'];?></span><br/></li>
    		                                          <li> <strong> Airbags</strong><span><?php echo $row['Airbags'];?></span><br/></li>
    		                                          <li> <strong> Climate Control</strong><span><?php echo $row['ClimateControl'];?></span><br/></li>
    		                                           <li> <strong> Damage Vehicle</strong><span><?php echo $row['DamageVehicle'];?></span><br/></li>
    		                                           
    		                                            
    		                                            <?php 
    		                                       }
	                                                	?>
											</ul>
								</div>
								<div class="clear"></div>
									
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	                   

		
		
							         

</html>