<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
	 $pass = $_POST['pass'];
	 $cpass = $_POST['cpass'];
	 $sql = "INSERT INTO register (first_name,last_name,email,password)
	 VALUES ('$first_name','$last_name','$email','$pass')";
	 if (mysqli_query($conn, $sql)) {
		header("Location: login.php");
		//echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>