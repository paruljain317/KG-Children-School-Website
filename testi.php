<?php

        include ('admin/dbcon.php');

        $q = "select * from testi";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>



<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('admin/<?php echo $result['imgs']?>');">
        <div class="container">
            <div class="section-title text-center">
                <h3><?php echo $result['title']?></h3>
               <!--  <p>Fable daycare, preschool, and kindergarten </p> -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <p style="color: white;"><?php echo $result['s1']?></p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <p style="color: white;"><?php echo $result['s2']?></p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <p style="color: white;"><?php echo $result['s3']?></p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <p style="color: white;"><?php echo $result['s4']?></p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->