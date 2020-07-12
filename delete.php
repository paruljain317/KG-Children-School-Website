<?php

include ('admin/dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM contactus WHERE  id = $id ";

mysqli_query($con, $q);

header ('location:display-data.php');


?>