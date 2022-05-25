<?php
session_start();
include_once 'database.php';
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM register where Email='$email'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['Email'];
	$email_id=$row['Email'];
	$password=$row['Password'];
	if($email==$fetch_user_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: sashaelalor@gmail.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
				 ini_set('display_errors', '1');
			}
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CRSM MAJOR PROJECT GROUP</title>
<link rel = "shortcut icon" href = "images/logo.png">
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
</head>

<body>
<div class = "navbar navbar-default navtop">
<img src = "images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">CRSM MAJOR PROJECT GROUP</label>
</div>
<h1>Forgot Password</h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Username or Email Address:</td><td><input type='text' name='email'/></td></tr>
</br>
<tr><td></td><td></br><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>

<div id = "footer">
<label class = "footer-title">&copy; CRSM MAJOR PROJECT GROUP 2022</label>
</div>
</body>
<img src = "images/background2.jpeg" class = "background">
</html>