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

$result= $conn->query($sql);
$row = $result->fetch_assoc()
if($row['sum(kms)']!='') {
  // Write the value of the column FirstName (which is now in the array $row)
  echo "Name : ".$_POST['name']."<br>Number : ".$_POST['num']."<br>Total Run : ".$row['sum(kms)'] . "<br />";
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