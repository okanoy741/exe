<html>
<head>
<title>Grade Cal</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "gradeexe";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	for ($i = 1; $i<= (int)$_POST["hdnCount"]; $i++){
		if(isset($_POST["txtCustomerID$i"]))
		{
			if($_POST["txtCustomerID$i"] != "" && 
					$_POST["txtUsed$i"] != "")
			{
				$sql = "INSERT INTO grade1 (SubjectNumber, Grade) 
					VALUES ('".$_POST["txtCustomerID$i"]."','".$_POST["txtUsed$i"]."')";
				$query = mysqli_query($conn,$sql);
			}
		}
	}

	echo "Record add successfully";
	mysqli_close($conn);
	header("location:showgrade.php");
?>
</body>
</html>