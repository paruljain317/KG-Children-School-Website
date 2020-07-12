<?php

        include ('admin/dbcon.php');

        $q = "select * from director";											
        $query = mysqli_query($con, $q);
		$result = mysqli_fetch_array($query)

		
?>
<?php
		$p = "select * from vision";											
        $query1 = mysqli_query($con, $p);
		$result1 = mysqli_fetch_array($query1) 
?>

<?php
		$r = "select * from activity";											
        $query2 = mysqli_query($con, $r);
		$result2 = mysqli_fetch_array($query2) 
?>
<?php
		$s = "select * from principal";											
        $query3 = mysqli_query($con, $s);
		$result3 = mysqli_fetch_array($query3) 
?>


<?php include "header.php" ?>

<!-- <div class="all-title-box">
		<div class="container text-center">
			<h1>About Us</h1>
		</div>
</div> -->

<div style="background-color: #dcdcdc;">
	<br><br>
	<div class="container">
		<div style="background-image: url('admin/<?php echo $result['bg']?>');">
			<br><br>
			<div class="text-center">
				<img src="admin/<?php echo $result['img1']?>" style="width: 350px; height: 370px;">
				<br><br>
				<h2 style="color: red; font-family: merienda; font-weight: bolder;"><?php echo$result['title']?></h2>
				<div style="margin-right: 35px; margin-left: 35px;">
					<p style=" font-size: 16px; color: #fff;"><?php echo $result['content']?></p>
					<!-- <p style=" font-size: 16px; color: #fff;">It is already evident that K.G. Children is a school where everyone, from the maintenance and cleaners through the faculty and administration, is deeply committed to ensuring that every day, each and every student has the opportunity to come to a safe, clean, well maintained facility and to interact with a professional staff that places student learning in a supportive and encouraging environment as the highest priority….<br>
					As a public School with the Primary Years Program, the Middle Years Program and High School level program, we provide an exemplary educational experience that promotes an international perspective. While demonstrating excellent academic progress and achievement, our students develop the important qualities of integrity, leadership, adaptability, resilience, and compassion for others. In addition, we are all active stewards of our precious environment.<br>
					Our campus, peaceful with lush vegetation and yet stimulating with unique, purpose built facilities, provides the environment for our educators to have a profoundly positive impact on the lives of our students. Students who will become successful global citizens and leaders.<br>
					The school’s strategic plan, excellent teaching and support staff, parents, and K.G’s Board of Directors are aligned with and support achieving our vision: Where Together We Thrive and Reach for Excellence.</p>
					<p style=" font-size: 16px; color: #fff;">I am happy to have the opportunity to serve in such a magnificent school and to look forward to helping pave the way for a bright and successful future.</p> -->
					<br>
				</div>
			</div>
		</div>
	</div><br><br>

	<div id="overviews" class="section lb">
        <div class="container">
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2 style="color: red; font-weight: 500;" ><?php echo$result1['vision']?></h2>
                        <p style="text-align: justify; font-size: 16px;"><b><?php echo$result1['c1']?></b></p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="admin/<?php echo$result1['img1']?>" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="admin/<?php echo$result1['img2']?>" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2 style="color: red; font-weight: 500;"><?php echo$result1['mission']?></h2>
                        <p style="text-align: justify; font-size: 16px;"><b><?php echo$result1['c2']?></b></p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


	<div style="background-image: url('admin/<?php echo $result3['bg']?>');">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 text-center">
					<br><br>
					<img src="admin/<?php echo $result3['img1']?>" style="width: 350px; height: 300px;"><br><br>
					<h3 style="color: grey;"><?php echo $result3['name']?></h3>
					<h3 style="color: grey;"><?php echo $result3['position']?></h3>
					<br>
				</div>

				<div class="col-md-8">
					<br><br>
					<h2 style="color: red; font-family: merienda; font-weight: bolder; text-align: center;"><?php echo $result3['title']?></h2>
					<div style="margin-right: 35px; margin-left: 35px;">
						<p style="text-align: center; font-size: 16px;"><b><?php echo $result3['subtitle']?></b></p>
						<p style="text-align: center; font-size: 16px;">&nbsp;
						<?php echo $result3['content']?><!-- We focus on discovering, developing and drawing out the hidden talents and the magic lying dormant inside all of its students. From academics to co-curricular activities, perseverance and a never-say-die spirit are entrenched in the heart of every student not only making them good students but brilliant human beings.</p>
						<p style="text-align: center;">In today’s dynamic world, a 360 degree development and grooming is of supreme importance and through our campus we are creating an environment for future leaders, entrepreneurs and professional who possess skills and aptitudes in an array of functional discipline --></p>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="hmv-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12" >
					<div class="inner-hmv" style="background-color: white;">
						<div class="icon-box-hmv"><i class="flaticon-achievement"></i></div>
						<h3><?php echo$result2['h1']?></h3>
						
						<p><?php echo$result2['c1']?><br><br><br></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="inner-hmv" style="background-color: white;">
						<div class="icon-box-hmv"><i class="flaticon-eye"></i></div>
						<h3><?php echo$result2['h2']?></h3>
						
						<p><?php echo$result2['c2']?></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="inner-hmv" style="background-color: white;">
						<div class="icon-box-hmv"><i class="flaticon-history"></i></div>
						<h3><?php echo$result2['h3']?></h3>
						
						<p><?php echo$result2['c3']?><br><br></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="inner-hmv" style="background-color: white;">
						<div class="icon-box-hmv"><i class="flaticon-eye"></i></div>
						<h3><?php echo$result2['h4']?></h3>
						
						<p><?php echo$result2['c4']?><br><br></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "testi.php" ?>

<?php include "footer.php" ?>