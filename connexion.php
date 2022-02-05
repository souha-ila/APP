 <?php

$hostname="localhost";
$username="root";
$password="";
$port="8889"
$dbname="projet";
 
$conn = mysqli_connect($hostname, $username, $password,$dbname);


if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

?>

