<?php

if (isset($_GET['delete_cat'])) {
	

	include("includes/db.php");

	$delete_id = $_GET['delete_cat'];

	$delete_cat=" DELETE FROM categories WHERE id= '$delete_id'";

	$drop_table = " ALTER TABLE cart DROP id ";

    $add_table=  "ALTER TABLE cart ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ";


	$run_delete = mysqli_query($con, $delete_cat);

	$run_drop = mysqli_query($con, $drop_table);
    $run_add_table = mysqli_query($con, $add_table);

	 if (($run_delete)&&($run_drop)&&($run_add_table)) {
		
		echo "<script>alert('Product has been deleted !')</script>";
		echo "<script>window.open('index.php?view_cats','_self')</script>";
	}
}



?>