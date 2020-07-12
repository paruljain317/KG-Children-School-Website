<?php

        include ('admin/dbcon.php');

        $q = "select * from counts";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>


<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count"><?php echo $result['students']?></p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-3 col-sm-3 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count"><?php echo $result['teachers']?></p>
					<h3>Teachers</h3>
				</div><!-- end col -->

				<div class="col-md-3 col-sm-3 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><img src="img/classroom.png" style="width: 55px;height: 65px;"></span>
					<p class="stat_count"><?php echo $result['classrooms']?></p>
					<h3>Classrooms</h3>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><img src="img/bus.png" style="width: 65px;height: 75px;"></span>
					<p class="stat_count"><?php echo $result['buses']?></p>
					<h3>School Buses</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><br><!-- end section -->