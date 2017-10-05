<!DOCTYPE html>
<html>
<head>
<title>Grade Cal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript">
$(document).ready(function(){

  var rows = 1;
  $("#createRows").click(function(){
            var tr = "<tr>";
            tr = tr + "<td><input type='text' name='txtCustomerID"+rows+"' id='txtCustomerID"+rows+"' size='5'></td>";
            // tr = tr + "<td><input type='text' name='txtName"+rows+"' id='txtName"+rows+"' size='10'></td>";
            // tr = tr + "<td><input type='text' name='txtEmail"+rows+"' id='txtEmail"+rows+"' size='15'></td>";
            // tr = tr + "<td><input type='text' name='txtCountryCode"+rows+"' id='txtCountryCode"+rows+"' size='5'></td>";
            // tr = tr + "<td><input type='text' name='txtBudget"+rows+"' id='txtBudget"+rows+"' size='5'></td>";
            tr = tr + "<td><input type='text' name='txtUsed"+rows+"' id='txtUsed"+rows+"' size='5'></td>";
            tr = tr + "</tr>";
            $('#myTable > tbody:last').append(tr);
          
            $('#hdnCount').val(rows);
            rows = rows + 1;
    });

    $("#deleteRows").click(function(){
        if ($("#myTable tr").length != 1) {
           $("#myTable tr:last").remove();
        }
    });

    $("#clearRows").click(function(){
        rows = 1;
        $('#hdnCount').val(rows);
        $('#myTable > tbody:last').empty(); // remove all
    });

  });
</script>
<meta charset=utf-8 />
<?php
ini_set('display_errors', 1);
error_reporting(~0);

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "gradeexe";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
    echo $objCon->connect_error;
    exit();
}

$strSQL = "SELECT * FROM subject INNER JOIN grade1 ON subject.SubjectNumber=grade1.SubjectNumber;";
$objQuery = mysqli_query($objCon,$strSQL);
if(!$objQuery)
{
  echo $objCon->error;
  exit();
}
?>

</head>
<body>

 <center>
 <form action="update.php" id="frmMain" name="frmMain" method="post">
<h1> Show Grade</h1>
<table width="600"  border="2">
  <tr>
    <td width="90">SubjectNumber</td>
    <!-- <td width="101">ProductID</td> -->
    <td width="180">SubjectFullName</td>
    <td width="59">Credit</td>
    <td width="59">Year</td>
    <td width="59">Semester</td>
    <td width="59"> <div align="center">Grade </div></td>
  </tr>
  <?php
  while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
  { 
   ?>
  <tr>
  <td><?php echo $objResult["SubjectNumber"];?></td>
    <td><?php echo $objResult["SubjectFullName"];?></td>
    <td><?php echo $objResult["Credit"];?></td>
    <td><?php echo $objResult["Year"];?></td>
    <td><?php echo $objResult["Semester"];?></td>
    <td><?php  $Grade=$objResult["Grade"];
   
 
       if(($Grade>100)||($Grade<0)) {    
         print "<span style=\"color: red;\">Error</span>" ;   
      }
      else if (($Grade>=79.5)&&($Grade<=100)) {    
         print "A";   
      }
       else if (($Grade>=74.5)&&($Grade<=79.4)) {    
         print "B+";   
      }
       else if (($Grade>=69.5)&&($Grade<=74.4)) {       
         print "B";   
      }
       else if (($Grade>=64.5)&&($Grade<=69.4)) {
            print "C+";
            
;   
      }
       else if (($Grade>=59.5)&&($Grade<=64.4)) {    
         print "C";   
      }
       else if (($Grade>=54.5)&&($Grade=59.4)) {            
         print "D+";   
      }
       else if (($Grade>=49.5)&&($Grade<=54.4)) {       
         print "D";   
      }
       else if ($Grade<=49.4) {       
         print "<span style=\"color: red;\">F</span>";   
      }   ;?></td>
  </tr>
  <?php
  }
  ?>
</table>


<!-- body dynamic rows -->
<tbody></tbody>
</table>

<table width="200" border="1" id="myTable">

<!-- head table -->
<thead>
  <tr>
    <td width="91"> <div align="center">SubjectNumber </div></td>
    <td width="59"> <div align="center">Grade </div></td>
  </tr>
</thead>

<!-- body dynamic rows -->
<tbody></tbody>
</table>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<input type="button" id="createRows" value="Add">
<input type="button" id="deleteRows" value="Del">
<input type="button" id="clearRows" value="Clear">
 <center>
 <br>
 <input type="hidden" id="hdnCount" name="hdnCount">
<input type="submit" value="Submit">
 </form>
</body>
</html>