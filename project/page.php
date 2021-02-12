
<?php

<?php
$servername = "localhost";
$database = "database";
$username = "username";
$password = "password";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo “Connected successfully”;

mysqli_close($conn);

?>


<?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>