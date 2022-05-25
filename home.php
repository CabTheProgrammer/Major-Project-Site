<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CRSM MAJOR PROJECT GROUP</title>
<link rel = "shortcut icon" href = "images/logo.png">
<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />

<style>
#gridthing{
	display:flex;
	flex-shrink:2;
	flex-wrap: wrap;
	align-items:center;
	justify-content:center
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 30px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 8px 13px;
  transition-duration: 0.4s;
  cursor: pointer;
  word-wrap: break-word;
  width: 30em;
  
}

.button1 {
 background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
  
}

.button1:hover {
  background-color: #008CBA;
  color: white;
}

.button2 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: white;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button2:hover {background-color: #e7e7e7}

.button2:active {
  background-color: #e7e7e7;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>
</head>
<div class = "navbar navbar-default navtop">
<img src = "images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">CRSM MAJOR PROJECT GROUP</label>
</div>
</br> </br> 
<body>
    
            <?php
				session_start();
				include 'database.php';
				$ID = $_SESSION["ID"];
				$sql= mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
            ?>

<h3><p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></p></h3>
<center><h2>This is CRSM Learning Platform. Please Select a Lesson to Begin.</h2></center>
<div id="gridthing">
<center>
<button class="button button1"><a href="lesson1.php">Lesson 1</a><p> Computer Basics: What Is a Computer?</p> </button>
<button class="button button1"><a href="lesson2.php">Lesson 2</a><p>Computer Basics: Understanding Applications</p></button>
<button class="button button1"><a href="lesson3.php">Lesson 3</a><p>Smartphone for Beginners: What is Smartphone? Home Screen and Icons</p></button>
<button class="button button1"><a href="lesson4.php">Lesson 4</a><p>Smartphone Basics (Android) </p></button>
<button class="button button1"><a href="lesson5.php">Lesson 5</a><p>iPhone tips: Basic Settings</p></button>
<button class="button button1"><a href="lesson6.php">Lesson 6</a><p>How to use Videochat FaceTime on iPhone and iPad</p></button>
<button class="button button1"><a href="lesson8.php">Lesson 7</a><p>How to use Zoom: Basics</p></button>
<button class="button button1"><a href="lesson6.php">Lesson 8 </a><p>How to Use WhatsApp 2022</p></button>
<button class="button button1"><a href="lesson6.php">Lesson 9 </a><p>How to alter text in WhatsApp </p></button>
<button class="button button1"><a href="lesson6.php">Lesson 10 </a><p>How to text (iPhone tips)</p></button>
</center>
</div>
</body>
</br> 
<button class="button2"><a href="logout.php">Logout </a></button>


<div id = "footer">
<label class = "footer-title">&copy; CRSM MAJOR PROJECT GROUP 2022</label>
</div>
<img src = "images/background6.jpg" class = "background">
</html>
