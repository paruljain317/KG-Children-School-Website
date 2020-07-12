<?php
include ('admin/dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From contactus where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);

}
?>


<!--update--->
<?php
  
  if(isset($_POST['update'])){

        $fname= $_POST['firstname'];
        $lname =$_POST['lastname'];
        $email =$_POST['emailid'];
        $num =$_POST['phonenumber'];
        $msg =$_POST['message'];
        $query ="UPDATE contactus SET firstname = '$fname', lastname = '$lname', emailid = '$email', phonenumber = '$num', message = '$msg' where id=$id";
        $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

        //if($fire)echo "data updated successfully.";
        if($fire) header("Location:display-data.php");

  } 
?>


<?php include "header.php" ?>

<div class="all-title-box">
		<div class="container text-center">
			<h1>Contact Us</h1>
		</div>
</div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7158.065031673633!2d78.221618!3d26.228133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88283b3e7a9478b9!2sK.G.Children%20Hr.%20Sec.%20School!5e0!3m2!1sen!2sin!4v1590945783029!5m2!1sen!2sin" width=100% height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center" style="padding-top: 50px; padding-left: 65px;">
                <div style="background-color: #aed6c1;; border-radius: 50%; width: 260px; height: 260px;">
                    
                    <br><br><i class="fa fa-location-arrow" aria-hidden="true" style="font-size: 35px; color: #133fa5;"></i>
                    <p style="font-weight: 700; font-size: 20px;">School Address</p><hr>
                    <p style="font-weight: 500;">K.G Children Hr.Sec School<br> River View Colony<br> Morar Gwalior</p>
                </div>
            </div>

            <div class="col-md-4 text-center" style="padding-top: 50px; padding-left: 65px;">
                <div style="background-color: #aed6c1;; border-radius: 50%; width: 260px; height: 260px;">

                        <br><br><i class="fa fa-phone" aria-hidden="true" style="font-size: 35px; color: #133fa5;"></i>
                        <p style="font-weight: 700; font-size: 20px;">Phone Number</p><hr>
                        <p style="font-weight: 500;">+91 9826711406</p>
                </div>
            </div>

            <div class="col-md-4 text-center" style="padding-top: 50px; padding-left: 65px;">
                <div style="background-color: #aed6c1;; border-radius: 50%; width: 260px; height: 260px;">
                    
                        <br><br><i class="fa fa-envelope" aria-hidden="true" style="font-size: 35px; color: #133fa5;"></i>
                        <p style="font-weight: 700; font-size: 20px;">Email Contact</p><hr>
                        <p style="font-weight: 500;">Kgschool_gwl@yahoo.co.in</p>
                </div>
            </div>
        </div>
    </div>
	
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead">Our mission is to offer the best services. Please contact with us immediately when you need.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="firstname" id="first_name" class="form-control" value="<?php echo $user['firstname'] ?>">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="lastname" id="last_name" class="form-control" value="<?php echo $user['lastname'] ?>">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="emailid" id="email" class="form-control" value="<?php echo $user['emailid'] ?>">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phonenumber" id="phone" class="form-control" value="<?php echo $user['phonenumber'] ?>">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="message" id="comments" rows="6" value="<?php echo $user['message'] ?>"></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" value="update" name="update" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
        </div><!-- end container -->
    </div><br><!-- end section -->


<?php include "footer.php" ?>






