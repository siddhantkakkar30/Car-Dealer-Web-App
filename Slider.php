<?php 

?>

<div class="slider">

	<!-- Slideshow -->
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
		<?php 
    		require_once('Connection.php');
    		$sel_query="SELECT * FROM slider";
    		$result = mysqli_query($con,$sel_query);
    		while($row = mysqli_fetch_assoc($result))
    		{
		?>
			<li>
				<img src="<?php echo $row['zImageUrl'];?>" alt="">
				<div class="caption">
					<h1><?php echo $row['zTitle'];?></h1>
					<span ><?php echo $row['zContent'];?>note</span>
				</div>
			</li>
		<?php 
    		}
		?>
		</ul>
	</div>
	<div class="clear"></div>
</div><?php ?>