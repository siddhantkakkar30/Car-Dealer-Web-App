
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
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header class="bg-theme">
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li class='active'><a href="index.html">Home</a></li>
				   <li><a href="#">Cars</a></li>
				   <li><a href="single.html">About</a></li>
				   <li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<a href='index.html' class="logo"><img src="images/logo.png" /></a>
		</div>
	</div>
</header>
<div class="slider">
	<!-- Slideshow -->
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<img src="images/slideshow-image1.jpg" alt="">
				<div class="caption">
					<h1>CAR DEALER WEBSITE NAME</h1>
					<span >Lorem ipsum dolor sit amet</span>
				</div>
			</li>
			<li>
				<img src="images/slideshow-image2.jpg" alt="">
				<div class="caption">
					<h1>CAR DEALER WEBSITE NAME</h1>
					<span >Lorem ipsum dolor sit amet</span>
				</div>
			</li>
			<li>
				<img src="images/slideshow-image3.jpg" alt="">
				<div class="caption">
					<h1>CAR DEALER WEBSITE NAME</h1>
					<span >Lorem ipsum dolor sit amet</span>
				</div>
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>

<div class="bg-theme">
	<div class="filter zerogrid">
		<h2 class="t-center">FIND CAR THAT YOU LOVE</h2>
		<div class="row">
			<div class="col-1-4">
				<div class="wrap-col">
					<span>Make :</span><br/>
					<select>
						<option>--ALL--</option>
						<option>Honda</option>
						<option>Infiniti</option>
						<option>Jeep</option>
						<option>Mercedes-Benz</option>
						<option>Volvo</option>
					</select>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<span>Modal :</span><br/>
					<select>
						<option>--ALL--</option>
						<option>Aston martin</option>
						<option>Audi</option>
						<option>Bentley</option>
						<option>Bmw</option>
						<option>Cadillac</option>
						<option>Chevrolet</option>
						<option>Citroen</option>
						<option>Dacia</option>
						<option>Dodge</option>
						<option>Ferrari</option>
						<option>Ford</option>
						<option>Gmc</option>
						<option>Hyundai</option>
						<option>Jaguar</option>
						<option>Lexus</option>
					</select>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<span>Price :</span><br/>
					<select>
						<option>--ALL--</option>
						<option>0-1000</option>
						<option>1000-5000</option>
						<option>5000-10000</option>
					</select>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<br>
					<a href="#" class="button bt1">Search</a>
				</div>
			</div>
		</div>
	</div>
</div>

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
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="item t-center">
									<div class="item-container">
										<a href="single.html">
											<div class="item-caption">
												<div class="item-caption-inner">
													<div class="item-caption-inner1">
														<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
													</div>
												</div>
											</div>
											<img src="images/car1.jpg" />
										</a>
									</div>
									<div class="item-info">
										<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
										<p>32,000 km €78,400</p>
									</div>
								</div>
								<div class="item t-center">
									<div class="item-container">
										<a href="single.html">
											<div class="item-caption">
												<div class="item-caption-inner">
													<div class="item-caption-inner1">
														<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
													</div>
												</div>
											</div>
											<img src="images/car5.jpg" />
										</a>
									</div>
									<div class="item-info">
										<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
										<p>32,000 km €78,400</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="item t-center">
									<div class="item-container">
										<a href="single.html">
											<div class="item-caption">
												<div class="item-caption-inner">
													<div class="item-caption-inner1">
														<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
													</div>
												</div>
											</div>
											<img src="images/car2.jpg" />
										</a>
									</div>
									<div class="item-info">
										<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
										<p>32,000 km €78,400</p>
									</div>
								</div>
								<div class="item t-center">
									<div class="item-container">
										<a href="single.html">
											<div class="item-caption">
												<div class="item-caption-inner">
													<div class="item-caption-inner1">
														<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
													</div>
												</div>
											</div>
											<img src="images/car4.jpg" />
										</a>
									</div>
									<div class="item-info">
										<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
										<p>32,000 km €78,400</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="item t-center">
									<div class="item-container">
										<a href="single.html">
											<div class="item-caption">
												<div class="item-caption-inner">
													<div class="item-caption-inner1">
														<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
													</div>
												</div>
											</div>
											<img src="images/car3.jpg" />
										</a>
									</div>
									<div class="item-info">
										<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
										<p>32,000 km €78,400</p>
									</div>
								</div>
								<div class="item t-center">
									<div class="item-container">
										<a href="single.html">
											<div class="item-caption">
												<div class="item-caption-inner">
													<div class="item-caption-inner1">
														<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
													</div>
												</div>
											</div>
											<img src="images/car1.jpg" />
										</a>
									</div>
									<div class="item-info">
										<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
										<p>32,000 km €78,400</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap-box t-center" style="background: #fff; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);"><!--Start Box-->
				<div class="zerogrid">
					<div class="header">
						<h2>WELCOME TO CAR DEALER WEBSITE</h2>
					</div>
					<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
				</div>
			</div>
			<div class="wrap-box" ><!--Start Box-->
				<div class="zerogrid">
					<div class="header">
						<h2>LATEST CARS</h2>
					</div>
					<div class="row">
						<div class="col-2-3">
							<div class="wrap-col">
								<div class="row">
									<div class="item">
										<div class="col-1-3">
											<div class="item-container">
												<a href="single.html">
													<div class="item-caption">
														<div class="item-caption-inner">
															<div class="item-caption-inner1">
																<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
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
													<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
													<p>32,000 km €78,400</p>
													<p>ABS, Leather seats, Power Assisted Steering, Electric heated seats, New HU and AU, Xenon headlights</p>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="row">
									<div class="item">
										<div class="col-1-3">
											<div class="item-container">
												<a href="single.html">
													<div class="item-caption">
														<div class="item-caption-inner">
															<div class="item-caption-inner1">
																<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
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
													<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
													<p>32,000 km €78,400</p>
													<p>ABS, Leather seats, Power Assisted Steering, Electric heated seats, New HU and AU, Xenon headlights</p>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="row">
									<div class="item">
										<div class="col-1-3">
											<div class="item-container">
												<a href="single.html">
													<div class="item-caption">
														<div class="item-caption-inner">
															<div class="item-caption-inner1">
																<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
															</div>
														</div>
													</div>
													<img src="images/car9.jpg" />
												</a>
											</div>
										</div>
										<div class="col-2-3">
											<div class="wrap-col">
												<div class="item-info">
													<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
													<p>32,000 km €78,400</p>
													<p>ABS, Leather seats, Power Assisted Steering, Electric heated seats, New HU and AU, Xenon headlights</p>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="row">
									<div class="item">
										<div class="col-1-3">
											<div class="item-container">
												<a href="single.html">
													<div class="item-caption">
														<div class="item-caption-inner">
															<div class="item-caption-inner1">
																<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
															</div>
														</div>
													</div>
													<img src="images/car10.jpg" />
												</a>
											</div>
										</div>
										<div class="col-2-3">
											<div class="wrap-col">
												<div class="item-info">
													<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
													<p>32,000 km €78,400</p>
													<p>ABS, Leather seats, Power Assisted Steering, Electric heated seats, New HU and AU, Xenon headlights</p>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="row">
									<div class="item">
										<div class="col-1-3">
											<div class="item-container">
												<a href="single.html">
													<div class="item-caption">
														<div class="item-caption-inner">
															<div class="item-caption-inner1">
																<span>2006 / 32,000 km / 250 HP / petrol / automatic /  Sports car/Coupe / Beige</span>
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
													<a href="single.html"><h3>LAMBORGHINI GALLARDO</h3></a>
													<p>32,000 km €78,400</p>
													<p>ABS, Leather seats, Power Assisted Steering, Electric heated seats, New HU and AU, Xenon headlights</p>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
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
											<a href="#"><img src="images/car8.jpg"/></a>
											<div class="wrapper">
											  <h5><a href="#">Lorem ipsum dolor</a></h5>
											   <span>$25 - $26</span>
											</div>
										</div>
										<div class="post">
											<a href="#"><img src="images/car9.jpg"/></a>
											<div class="wrapper">
											  <h5><a href="#">Lorem ipsum dolor</a></h5>
											  <span>$25 - $26</span>
											</div>
										</div>
										<div class="post">
											<a href="#"><img src="images/car10.jpg"/></a>
											<div class="wrapper">
											  <h5><a href="#">Lorem ipsum dolor</a></h5>
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
		</div>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<h3>Contact</h3>
				<span>Phone / +80 999 99 9999 </span></br>
				<span>Email / info@domain.com  </span></br>
				<span>Studio / Moonshine St. 14/05 Light City </span></br>
				<span>Copyright 20xx - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a></span>
			</div>
		</div>
	</div>
</footer>

</div>
</body></html>