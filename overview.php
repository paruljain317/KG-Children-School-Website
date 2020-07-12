<?php

        include ('admin/dbcon.php');

        $q = "select * from overview";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>

<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3><?php echo $result['title']?></h3>
            </div>
        </div><!-- end title -->


        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="message-box">
                     
                    <h4 style="font-size: larger;"><?php echo $result['contentheading']?></h4>
                        
                    <p><?php echo $result['contentpara']?></p>

                    <div class="row">
                        <div class="col-md-6">
                            <p><i class="fa fa-gamepad oicon" aria-hidden="true" style="font-size: 23px; color: blue;" ></i>&nbsp;&nbsp;&nbsp;Play Area</p>
                            <p><i class="fa fa-cubes" aria-hidden="true" style="font-size: 20px; color: blue;"></i>&nbsp;&nbsp;&nbsp;Activity Rooms</p>
                            <p><i class="fa fa-music" aria-hidden="true" style="font-size: 20px; color: blue;"></i>&nbsp;&nbsp;&nbsp;Music and Art Room</p>
                        </div>

                        <div class="col-md-6">
                            <p><i class="fa fa-tags" aria-hidden="true" style="font-size: 20px; color: blue;"></i>&nbsp;&nbsp;&nbsp;Full Day Sessions</p>
                            <p><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 20px; color: blue;"></i>&nbsp;&nbsp;&nbsp;Varied Classes</p>
                            <p><i class="fa fa-desktop" aria-hidden="true" style="font-size: 20px; color: blue;"></i>&nbsp;&nbsp;&nbsp;Computer Labs</p>
                        </div>
                    </div>

                </div>
            </div><!-- end col -->
                
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="post-media wow fadeIn">
                    <img src="admin/<?php echo $result['image']?>" alt="" class="img-fluid img-rounded" >
                </div><!-- end media -->
            </div><!-- end col -->
        </div>
    </div>
</div>