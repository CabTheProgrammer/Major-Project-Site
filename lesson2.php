<!DOCTYPE html>

<html lang="en">

<head>
Elderlearn by CRSM
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Elderlearn by CRSM</title>

<link rel = "shortcut icon" href = "images/logo.png">

<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />

<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />

<style>

.button2 {

  display: inline-block;

  padding: 15px 25px;

  font-size: 24px;

  cursor: pointer;

  text-align: center;

  text-decoration: none;

  outline: none;

  color: #fff;
  /* Elderlearn by CRSM */

  background-color: white;

  border: none;

  border-radius: 15px;

  box-shadow: 0 9px #999;

}



.button2:hover {background-color: #e7e7e7}



.button2:active {

  background-color: #e7e7e7;
/* Elderlearn by CRSM */
  box-shadow: 0 5px #666;

  transform: translateY(4px);

}



</style>

</head>

<div class = "navbar navbar-default navtop">

<img src = "images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Elderlearn by CRSM</label>

</div>



<body>

<

            <?php

				session_start();

				include 'database.php';

				$ID = $_SESSION["ID"];

				$sql= mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");

				$row  = mysqli_fetch_array($sql);

            ?>



<h3><p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></p></h3>



<center><h2>Lesson 2:Computer Basics: Understanding Applications</h2>

<iframe  width= "900" height="600" src="lesson2.mp4"> </iframe>

</center>



</body>

<div id = "footer">

<label class = "footer-title">&copy; Elderlearn by CRSM 2022</label>

</div>

<button class="button button2"><a href="home.php">Home </a></button>

<button class="button button2"><a href="lesson1.php">Go Back </a></button>

<button class="button button2"><a href="lesson3.php">Next </a></button>

<button class="button button2"><a href="logout.php">Logout </a></button>

</html>

