<?php

        include ('admin/dbcon.php');

        $q = "select * from imgtitle";                                          
        $query = mysqli_query($con, $q);
        $result = mysqli_fetch_array($query)

        
?>
<?php

        $q1 = "select * from images";                                          
        $query1 = mysqli_query($con, $q1);
        // $result1 = mysqli_fetch_array($query1)

        
?>




<?php include "header.php" ?>

<div class="all-title-box">
	<div class="container text-center">
		<h1><?php echo $result['title']?></h1>
	</div>
</div>

<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">

            	<?php
            		while ($result1 = mysqli_fetch_array($query1)) {
            	?>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<a href = "admin/<?php echo $result1['img']?>"><img src="admin/<?php echo $result1['img']?>" style="width: 250px; height: 200px;">
							</a>
						</div>
					</div>
				</div>

				<?php
					}
				?>	
        </div><!-- end container -->
    </div><!-- end section -->

<?php include "testi.php" ?>

<?php include "footer.php" ?>