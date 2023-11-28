<?php
	session_start();
	
	

if(isset($_POST['Loginbtn']))
{

$con = mysqli_connect('localhost','root','','testproject');
@$username = $_POST["Clientemailid"];
@$password = $_POST["Clientpassword"];
$sql = "SELECT * FROM `client` WHERE `client`.`EMailid` = '$username' and `client`.`ClientPassword` = '$password'";
$query=mysqli_query($con,$sql);



$num_rows = mysqli_num_rows($query);

if($num_rows == 1) 
{
		$raw=mysqli_fetch_array($query);
		$_SESSION["wid"] = $raw[0];		
	  header('Location: Homepage.php');
	  

}
 else
 {
	echo "you are not a valid user!";
 }

 }
/*if($query == true) {
  echo '<a href="ClientLogin.php">Error: cannot execute query</a>';
  exit;
}*/


/*$num_rows = mysql_num_rows($query);
if($num_rows == 1) {
  $_SESSION["login"] = "OK";
  $_SESSION["username"] = $username;
 $redirect = "Homepage.php";
}
else
 $redirect = "ClientLogin.php";

mysql_free_result($query);
mysql_close($link);

header("Location: $redirect");*/

?>

<html>
<head>
	<title> Login form for client </title>
	<link rel = "stylesheet" href = "./css/Login.css">
</head>
<body>
<table>
	<div class="wrapper">
		<div class="logo"> <img src="IMAGES\logo4-removebg-preview(1).png" alt="logo"> </div><br>
		<div class="text-center mt-4 name" aling="center"> E-Home's Services </div><br>
		<form class="p-3 mt-3" method="post" action="ClientLogin.php">
			E-mail id
			<div class="form-field d-flex align-items-center">
			<span class="far fa-user"></span>
			<input type="text" name="Clientemailid" id="ClientId" placeholder="E-Mail id">
			</div>
			password
			<div class="form-field d-flex align-items-center">
			<span class="fas fa-key"></span>
			<input type="password" name="Clientpassword" id="Clientpwd" placeholder="password">
			</div>

			<button class="btn mt-3" name="Loginbtn">Login </button>
		</form>
		<div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="ClientSignup.php">Sign up</a> </div>
	</div>
</table>
</body>
</html>
<?php include_once "./include/footer.php"; ?>