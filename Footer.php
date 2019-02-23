<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<h1>Contact</h1>
				<?php 
    		require_once('Connection.php');
    		$sel_query="SELECT * FROM zcontact";
    		$result = mysqli_query($con,$sel_query);
    		while($row = mysqli_fetch_assoc($result))
    		{
		?>
		
	<span>Mobile No:-<?php echo $row['PhoneNo'];?></span>
				<div class="caption">
					<span>Email Id:-<?php echo $row['Email'];?></span><br/>
					<span >Address:-<?php echo $row['Address'];?></span><br/>
						<span >DesignedBy:-<?php echo $row['DesignedBy'];?></span>
				</div>
			</li>
		<?php 
    		}
		?>
			</div>
		</div>
	</div>
</footer>

</div>

<?php ?>