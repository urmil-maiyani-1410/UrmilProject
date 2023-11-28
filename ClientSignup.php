<?php
	if(isset($_POST['Signupbtn']))
	{
	@$cid = $_POST["Clientid"];
	@$cpassword = $_POST["Clientpassword"];
	@$cfname = $_POST["Firstname"];
	@$cmname = $_POST["Middlename"];
	@$clname = $_POST["Lastname"];
	@$cgender = $_POST["gender"];
	@$ccnumber = $_POST["ContactNo"];
	@$cemail = $_POST["EmailId"];
	@$caddress1 = $_POST["Address1"];
	@$caddress2 = $_POST["Address2"];
	$city = $_POST["city"];
	@$cstate = $_POST["State"];
	$cpincode = $_POST["Pincode"];
	$con = mysqli_connect('localhost','root','','testproject');
	/*if($con)
	echo "Connected successfully.";*/
	$smt="INSERT INTO `client`(`ClientId`, `ClientPassword`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `ContactNo`, `EMailid`, `Address1`, `Address2`, `City`, `State`, Pincode)
VALUES ('$cid','$cpassword','$cfname','$cmname','$clname','$cgender','$ccnumber','$cemail','$caddress1','$caddress2','$city','$cstate','$cpincode')";
	
	$query=mysqli_query($con,$smt);
	if($query)
		header('location: ClientLogin.php');
	}
	/*if($query)
		*/
	?>

<html>
	<head>
		<title> Sign up form for Client </title>
		<link rel = "stylesheet" href = "./css/Login.css">
	</head>
	<body>
		<table>
			<div class="wrapper">
				<div class="logo"> <img src="IMAGES\logo4-removebg-preview(1).png" alt="logo"> </div>
				<div class="text-center mt-4 name" aling="center"> E-Home's Services </div><br>
				<form class="p-3 mt-3" method="post" action="ClientSignup.php">
					E-mail
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="email" name="EmailId" id="ClientEid" placeholder="E-mail Id">
					</div>
					Client password
					<div class="form-field d-flex align-items-center">
					<span class="fas fa-key"></span>
					<input type="password" name="Clientpassword" id="Clientpwd" placeholder="Client password">
					</div>
					First name
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="Firstname" id="ClientFName" placeholder="First name">
					</div>
					Middle name
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="Middlename" id="ClientMName" placeholder="Middle name">
					</div>
					Last name
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="Lastname" id="ClientLName" placeholder="Last name">
					</div>
					Gender: 
					<input type="radio" name="gender" id="male"  value="Male"><lable>Male</lable>
					<input type="radio" name="gender" id="female"  value="Female"><lable>Female</lable><br><br>
					Contact number
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="ContactNo" id="ClientCno" placeholder="Contact No.">
					</div>
					Address - 1
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="Address1" id="ClientAdd1" placeholder="Address - 1">
					</div>
					Address - 2
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="Address2" id="ClientAdd2" placeholder="Address - 2">
					</div>
					City
            <select class="form-field" style=" width:100%;height: 50px;" name="city" id="city">
                <option value="none">Select City --</option>
                <option value="Ambawadi">Ambawadi City</option>
                <option value="Anandnagar">Anandnagar</option>
                <option value="AshramRoad">Ashram Road</option>
				<option value="Ambli">Ambli</option>
				<option value="Bodakdev">Bodakdev</option>
				<option value="Bapunagar">Bapunagar</option>
				<option value="Bopal">Bopal</option>
				<option value="CGRoad">C G Road</option>
				<option value="Chandlodia">Chandlodia</option>
				<option value="DaniLimbada">Dani Limbada</option>
				<option value="Ghatlodia">Ghatlodia</option>
				<option value="GulbaiTekra">Gulbai Tekra</option>
				<option value="Gurukul">Gurukul</option>
				<option value="Hathijan">Hathijan</option>
				<option value="Isanpur">Isanpur</option>
				<option value="Jivrajpark">Jivrajpark</option>
				<option value="Jodhpur">Jodhpur</option>
				<option value="JunaWadaj">Juna Wadaj</option>
				<option value="Mirzapur">Mirzapur</option>
				<option value="Nehrunagar">Nehrunagar</option>
				<option value="Kotarpur">Kotarpur</option>
				<option value="Shilaj">Shilaj</option>
				<option value="Sola">Sola</option>
				<option value="Thaltej">Thaltej</option>
				<option value="Usmanpura">Usmanpura</option>
				<option value="Vastral">Vastral</option>
				<option value="Vejalpur">Vejalpur</option>
   			</select>
					State
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="State" id="ClientState" placeholder="State">
					</div>
					Pincode
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="Pincode" id="ClientPincode" placeholder="Pincode">
					</div>
					
					<button class="btn mt-3" name="Signupbtn">Sign up</button>
					
				</form>
			</div>
		</table>
	</body>
</html>

<?php include_once "./include/footer.php"; ?>