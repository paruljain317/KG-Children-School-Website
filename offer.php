<?php

        include ('admin/dbcon.php');

        $q = "select * from offer";														

        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>


<section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3><?php echo $result['title']?></h3>
                    <p class="lead"><?php echo $result['subtitle']?></p>
                </div>
            </div><!-- end title -->
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2><?php echo $result['heading1']?></h2>
								<p><?php echo $result['content1']?></p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2><?php echo $result['heading2']?></h2>
								<p><?php echo $result['content2']?></p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2><?php echo $result['heading3']?></h2>
								<p><?php echo $result['content3']?></p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2><?php echo $result['heading4']?></h2>
								<p><?php echo $result['content4']?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


