<html>
<head>
	<title> Welcome page </title>
	<style>
	.btn {
			box-shadow: none;
			width: 15%;
			height: 40px;
			background-color: #138808;
			color: #fff;
			border-radius: 25px;
			box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
			letter-spacing: 1.3px
	}
	.btn:hover {
      background-color: #8cc751
  }
	</style>
	<link rel = "stylesheet">
</head>
<body>
		<div class="logo"> <img src="IMAGES\logo4-removebg-preview(1).png" alt="logo"> </div><br>
		<center>
			<div class="text-center mt-4 name"> Hey, </div><br>
			<div class="text-center mt-4 name"> Welcome to our website E-Home's Services </div><br>
			<a href="ClientLogin.php">
						<button class="btn mt-3">Let's get started</button>
			</a>
		</center>
</body>


<?php
	include_once './include/footer.php';
?>