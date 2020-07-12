<?php

        include ('admin/dbcon.php');

        $q = "select * from program";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>


<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center" style="margin-bottom: -72px !important; ">
            <div class="col-md-8 offset-md-2">
                <h3><?php echo $result['title']?></h3>
                <p class="lead"><?php echo $result['subtitle']?></p>
            </div>
        </div><!-- end title -->
    </div>
</div>

<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="admin/<?php echo $result['img1']?>" style="height: 190px;">
							<div class="social">
								<br><p><b><?php echo $result['c1']?></b></p>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title"><?php echo $result['f1']?></h3>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="admin/<?php echo $result['img2']?>" style="height: 190px;">
							<div class="social">
								<br><br><p><b><?php echo $result['c2']?></b></p>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title"><?php echo $result['f2']?></h3>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="admin/<?php echo $result['img3']?>" style="height: 190px;">
							<div class="social">
								<br><br><p><b><?php echo $result['c3']?></b></p>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title"><?php echo $result['f3']?></h3>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="admin/<?php echo $result['img4']?>" style="height: 190px;">
							<div class="social">
								<br><br><p><b><?php echo $result['c4']?></b></p>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title"><?php echo $result['f4']?></h3>
						</div>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	