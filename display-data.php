<?php include "header.php" ?>
<div class="container">
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">First Name</th>
		    		<th scope="col">Last Name</th>
		    		<th scope="col">Email Id</th>
		  			<th scope="col">Phone Number</th>
		  			<th scope="col">Message</th>
		  			<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php

			    	include ('admin/dbcon.php');

			        $q = "select * from contactus";
			        $query = mysqli_query($con, $q);
			       

			        while ($result = mysqli_fetch_array($query)) {
			       	
			    ?>

			    <tr>
				    <td><?php echo $result['id']?></td>	
				    <td><?php echo $result['firstname']?></td>	
				    <td><?php echo $result['lastname']?></td>
				    <td><?php echo $result['emailid']?></td>
				    <td><?php echo $result['phonenumber']?></td>
				     <td><?php echo $result['message']?></td>
				    <td>
				     	<a href="delete.php?id=<?php echo $result['id'];?>">Delete</a>
				     	<span>/</span>
				     	<a href="update.php?id=<?php echo $result['id'];?>">Update</a>
				     </td>	
				</tr>

				<?php
					}
				?>
			</tbody>
		</table><br><br>
	</div>
</div>

<?php include "footer.php" ?>