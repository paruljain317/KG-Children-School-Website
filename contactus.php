<?php

        include ('admin/dbcon.php');

        $q = "select * from contact";                                          
        $query = mysqli_query($con, $q);
        $result = mysqli_fetch_array($query)

        
?>



<?php include "header.php" ?>

<div class="all-title-box">
		<div class="container text-center">
			<h1><?php echo $result['title']?></h1>
		</div>
</div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7158.065031673633!2d78.221618!3d26.228133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88283b3e7a9478b9!2sK.G.Children%20Hr.%20Sec.%20School!5e0!3m2!1sen!2sin!4v1590945783029!5m2!1sen!2sin" width=100% height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center" style="padding-top: 50px; padding-left: 65px;">
                <div style="background-color: #aed6c1;; border-radius: 50%; width: 260px; height: 260px;">
                    
                    <br><br><i class="fa fa-location-arrow" aria-hidden="true" style="font-size: 35px; color: #133fa5;"></i>
                    <p style="font-weight: 700; font-size: 20px;"><?php echo $result['h1']?></p><hr>
                    <p style="font-weight: 500;"><?php echo $result['c1']?></p>
                </div>
            </div>

            <div class="col-md-4 text-center" style="padding-top: 50px; padding-left: 65px;">
                <div style="background-color: #aed6c1;; border-radius: 50%; width: 260px; height: 260px;">

                        <br><br><i class="fa fa-phone" aria-hidden="true" style="font-size: 35px; color: #133fa5;"></i>
                        <p style="font-weight: 700; font-size: 20px;"><?php echo $result['h2']?></p><hr>
                        <p style="font-weight: 500;"><?php echo $result['c2']?></p>
                </div>
            </div>

            <div class="col-md-4 text-center" style="padding-top: 50px; padding-left: 65px;">
                <div style="background-color: #aed6c1;; border-radius: 50%; width: 260px; height: 260px;">
                    
                        <br><br><i class="fa fa-envelope" aria-hidden="true" style="font-size: 35px; color: #133fa5;"></i>
                        <p style="font-weight: 700; font-size: 20px;"><?php echo $result['h3']?></p><hr>
                        <p style="font-weight: 500;"><?php echo $result['c3']?></p>
                </div>
            </div>
        </div>
    </div>
	
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3><?php echo $result['f1']?></h3>
                <p class="lead"><?php echo $result['f2']?></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="firstname" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="lastname" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="emailid" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phonenumber" id="phone" class="form-control" placeholder="Your Phone Number">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="message" id="comments" rows="6" placeholder="Give us message.."></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="submit" name="submit" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
        </div><!-- end container -->
    </div><br><!-- end section -->


<?php include "footer.php" ?>



<?php   

  if(isset($_POST['submit'])){


    $fname= $_POST['firstname'];
    $lname =$_POST['lastname'];
    $email =$_POST['emailid'];
    $num =$_POST['phonenumber'];
    $msg =$_POST['message'];


    $q ="INSERT INTO contactus (firstname, lastname, emailid, phonenumber,  message) VALUES ('$fname','$lname', '$email', '$num', '$msg')";

   $query =mysqli_query($con, $q);

    if($query){
        ?>
        <script>
            alert("data inserted properly")
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted")
        </script>
        <?php
    }
}
?>