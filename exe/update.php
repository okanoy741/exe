<html>
<head>
<title>Grade Cal</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
$userName = "id3154242_okanoy741";
$userPassword = "okanoy00";
$dbName = "id3154242_gradeexe";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	for ($i = 1; $i<= (int)$_POST["hdnCount"]; $i++){
		if(isset($_POST["txtCustomerID$i"]))
		{
			if($_POST["txtCustomerID$i"] != "" && 
					$_POST["txtUsed$i"] != "")
			{
				$sql = "UPDATE `grade1` SET `Grade`='".$_POST["txtUsed$i"]."' WHERE `SubjectNumber`='".$_POST["txtCustomerID$i"]."'";
				$query = mysqli_query($conn,$sql);
			}
		}
	}

	echo "Record add successfully";
	mysqli_close($conn);
	
?><br>
<a href="showgrade.php"><input type="button" id="createRows" value="Show Grade"></a>
</body>
</html>