
<html>
<head>
	<title> Sign up form for worker </title>
	<link rel = "stylesheet" href = "./css/Login.css">
</head>
<body>
<?php
			session_start();
			if(!isset($_SESSION["wid"]))
    		{
        		header('location:ClientLogin.php');
    		}
			$con = mysqli_connect("localhost","root","");
			$db=mysqli_select_db($con,"testproject");
		
			$password = "";			
			$firstname = "";
			$middlename = "";
			$lastname = "";
			$gender = "";
			$dateofjoin = "";
			$contactNumber1 = "";
			$contactNumber2 = "";
			$email = "";	
			if(isset($_SESSION['wid']))
			{
				$selectQuery = "select * from client where ClientId= ". $_SESSION['wid'];
				
				$result = mysqli_query($con,$selectQuery);
				$row = mysqli_fetch_array($result);
				$password = $row[1];
				$firstname = $row[2];
				$middlename = $row[3];
				$lastname = $row[4];
				$gender = $row[5];
				
				if($gender == "Male")
				{	
					$optionGender[0] = "Checked";
					$optionGender[1] = "";
				}
				else
				{
					$optionGender[0] = "";
					$optionGender[1] = "Checked";
				}
				$contactNumber = $row[6];
				$email = $row[7];
				$Address1 = $row[8];
				$Address2 = $row[9];
				$City = $row[10];
				$State = $row[11];
				$Pincode = $row[12];
				
			}
			if (isset($_POST["Signupbtn"]))
			{
				$firstname = $_POST["Firstname"];
				$middlename = $_POST["Middlename"];
				$lastname = $_POST["Lastname"];
				$gender = $_POST["WorkerGender"];
				$password = $_POST["Workerpassword"];
				$email = $_POST["EmailId"];
				$dateofjoin = $_POST["Dateofjoin"];
				$contactNumber1 = $_POST["ContactNo1"];
				$contactNumber2 = $_POST["ContactNo2"];
				
				$updateQuery = "UPDATE `client` SET `ClientPassword`='".$password."',`FirstName`='".$firstname."',`MiddleName`='".$middlename."',`LastName`='".$lastname."',`Gender`='".$gender."',`ContactNo`='".$contactNumber."',`EMailid`='".$email."',`Address1`='".$Address1."',`Address2`='".$Address2."',`City`='".$City."',`State`='".$State."',`Pincode`='".$Pincode."' WHERE ClientId =".$_SESSION['wid'];
				$result = mysqli_query($con, $updateQuery);
				if($result==1)
				{
					header("location:ClientLogin.php");
					echo "Everythings is perfect";
				}
				else
				{
					echo "Something wrong".mysqli_error($con);
				}
			}
		?>
<table>
	<div class="wrapper">
		<div class="logo"> <img src="IMAGES\logo4-removebg-preview(1).png" alt="logo"> </div><br>
		<div class="text-center mt-4 name" aling="center"> E-Home's Services </div><br>
		<form class="p-3 mt-3" method="post" >
			E-mail
			<div class="form-field d-flex align-items-center">
			<span class="far fa-user"></span>
			<input type="email" name="EmailId" id="WorkerEid" placeholder="E-mail Id"
			value="<?php echo $email ?>">
			</div>
			Worker password
			<div class="form-field d-flex align-items-center">
			<span class="fas fa-key"></span>
			<input type="password" name="Workerpassword" id="Workerpwd" placeholder="Worker password"
			value="<?php echo $password ?>">
			</div>
			First name
			<div class="form-field d-flex align-items-center">
			<span class="far fa-user"></span>
			<input type="text" name="Firstname" id="WorkerFName" placeholder="First name"
			value="<?php echo $firstname ?>">
			</div>
			Middle name
			<div class="form-field d-flex align-items-center">
			<span class="far fa-user"></span>
			<input type="text" name="Middlename" id="WorkerMName" placeholder="Middle name"
			value="<?php echo $middlename ?>">
			</div>
			Last name
			<div class="form-field d-flex align-items-center">
			<span class="far fa-user"></span>
			<input type="text" name="Lastname" id="WorkerLName" placeholder="Last name"
			value="<?php echo $lastname ?>">
			</div>
			Gender<br>
			<input type="radio" name="WorkerGender" id="Male" 
			<?php echo $optionGender[0]?>
			value="Male"><lable>Male</lable>
			
			<input type="radio" name="WorkerGender" id="Female"
			<?php echo $optionGender[1]?>			
			value="Female"><lable>Female</lable><br><br>
			
			Contact number
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="ContactNo" id="ClientCno" placeholder="Contact No."
					value = <?php echo $contactNumber?>>
					</div>
					Address - 1
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="Address1" id="ClientAdd1" placeholder="Address - 1"
					value = <?php echo $Address1?>>
					</div>
					Address - 2
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="Address2" id="ClientAdd2" placeholder="Address - 2"
					value = <?php echo $Address2?>>
					</div>
					City
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="City" id="ClientCity" placeholder="City"
					value = <?php echo $City?>>
					</div>
					State
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="State" id="ClientState" placeholder="State"
					value = <?php echo $State?>>
					</div>
					Pincode
					<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="text" name="Pincode" id="ClientPincode" placeholder="Pincode"
					value = <?php echo $Pincode?>>
					</div>
			<button class="btn mt-3" name="Signupbtn">Update</button>
		</form>
</table>
	</div>
</body>
</html>

<?php
	include_once './include/footer.php';
?>