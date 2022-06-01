<?php

    //session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Elderlearn by CRSM</title>

<link rel = "shortcut icon" href = "images/logo.png">

<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />

<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />

</head>



<body>

<div class = "navbar navbar-default navtop">

<img src = "images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Elderlearn by CRSM</label>

</div>



<div id = "sidelogin">

    <form action="loginProcess.php" method="post" enctype="multipart/form-data">

	<label class = "lbllogin">Please Login Here...</label>

		

        <div class="form-group">

        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">

        </div>

		<div class="form-group">

            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">

        </div>

		<div class="form-group">

            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>

        </div>

		

        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>

		<div class="text-center">Forget Password? <a href="forgetpassword.php">Click Here</a></div>

    </form>

	

<div id = "footer">

<label class = "footer-title">&copy; Elderlearn by CRSM 2022</label>

</div>



</div>

<img src = "images/background.jpg" class = "background">

</body>

</html>



					

	



 

