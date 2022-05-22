<?php
$dbhost = 'localhost';
$dbuser = 'root';
$conn = mysqli_connect($dbhost, $dbuser);
if(! $conn )
{
  die('Could not connect: ' . mysqli_connect_error());
}
echo 'Connected successfully';
$sql = 'CREATE Database Ushtrime';
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('Could not create database: ' . mysqli_connect_error());
}
echo "Database Ushtrime created successfully\n";
mysqli_close($conn);
?>