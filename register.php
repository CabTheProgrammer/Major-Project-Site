<!DOCTYPE html>

<html lang="en">

<head>
Elderlearn by CRSM
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Elderlearn by CRSM</title>

<link rel = "shortcut icon" href = "images/logo.png">

<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />Elderlearn by CRSM

<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />



</head>

<body>



<div class = "navbar navbar-default navtop">

<img src = "images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Elderlearn by CRSM</label>

</div>



<div id="sidelogin">

    <form action="register_a.php" method="post" enctype="multipart/form-data">

	

		<label class = "lbllogin">Please Register Here...</label>

		<p class="hint-text">Create your account</p>

        <div class="form-group">

			

			<div class="form-group">

			<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">

			</div>

			<div class="form-group">

			<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">

			</div>

			        	

        </div>

        <div class="form-group">

        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">

        </div>

		<div class="form-group">

            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">

        </div>

		<div class="form-group">

            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">

        </div>

              

        <div class="form-group">

			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>

		</div>

		<div class="form-group">

            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>

        </div>

        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>

    </form>

</div>

</body>

<div id = "footer">

<label class = "footer-title">&copy; Elderlearn by CRSM 2022</label>

</div>

<img src = "images/background4.jpeg" class = "background">

</html>