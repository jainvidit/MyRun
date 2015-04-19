<!DOCTYPE html>
<html>
<head>
	<title>Query</title>
</head>
<body>


<?php
$servername = "mysql.serversfree.com";
$username = "u829405040_noobc";
$password = "qwertyuiop";
$dbname = "u829405040_myrun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo $_POST("name");
$sql = "SELECT sum(kms) FROM run where Name = \"".$_POST['name']."\"and Number = ".$_POST['num'];
$sql2 = "SELECT * FROM run where Name = \"".$_POST['name']."\"and Number = ".$_POST['num'];

$result= $conn->query($sql);
$result2= $conn->query($sql2);

$row = $result->fetch_assoc();
$no_of_runs =  $result2->num_rows;
if($no_of_runs>0) {
  // Write the value of the column FirstName (which is now in the array $row)
  echo "Name : ".$_POST['name']."<br>Number : ".$_POST['num']."<br>Total Run : ".$row['sum(kms)'] . "<br />Number of runs = ".$no_of_runs."<br>";
}
else{
	echo "Invalid Details"."<br>";
}


	// Close the database connection
	$conn->close();
	?>

<br>
<a href="../">Home</a>
<br>
<a href="../query.html">Back</a>
</body>
</html>