<?php

        include ('admin/dbcon.php');

        $q = "select * from staff";														

        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>



<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3><?php echo $result['title']?></h3>
                <p><?php echo $result['subtitle']?></p>
            </div>
        </div><!-- end title -->
		<div class="row">
			<div class="col-md-7">
				<div class="carousel slide" data-interval="3500" data-pause="false" data-ride="carousel" id="carousel">
					<ol class="carousel-indicators">
						<li data-slide-to="0" data-target="#carousel" class="active"></li>
						<li data-slide-to="1" data-target="#carousel"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="d-block w-100">
								<div class="slide-box">
									<a href="admin/<?php echo $result['img1']?>"><img alt="First slide" src="admin/<?php echo $result['img1']?>" style="height:200px; width: 190px; padding:10px; border-radius: 50%"></a>
									<a href="admin/<?php echo $result['img2']?>"><img alt="First slide" src="admin/<?php echo $result['img2']?>" style="height:200px; width: 190px; padding:10px; border-radius: 50%"></a>
									<a href="admin/<?php echo $result['img3']?>"><img alt="First slide" src="admin/<?php echo $result['img3']?>" style="height:200px; width: 190px; padding:10px; border-radius: 50%"></a>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="d-block w-100">
								<div class="slide-box">
									<a href="admin/<?php echo $result['img4']?>"><img alt="Second slide" src="admin/<?php echo $result['img4']?>" style="height:200px; width: 190px; padding:10px; border-radius: 50%"></a>
									<a href="admin/<?php echo $result['img5']?>"><img alt="Second slide" src="admin/<?php echo $result['img5']?>" style="height:200px; width: 190px; padding:10px; border-radius: 50%"></a>
								</div>
							</div>
						</div>
					</div>
				</div><br><br>
			</div>
			<div class="col-md-5">
				<h3><b><?php echo $result['heading']?></b></h3>

				<p><?php echo $result['content']?></p>
			</div>
		</div>
	</div>
</div>