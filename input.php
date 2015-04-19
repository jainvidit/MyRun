<html>
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
$sql = "INSERT INTO run VALUES (\"".$_POST[name]."\",".$_POST[num].",".$_POST[kms].")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php header( "refresh:2;url=../../" ); ?>

</body>
</html>



