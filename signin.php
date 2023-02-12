<?php
session_start();
header('location:index.html')
$server="localhost";
$username="root";
$password="";
$con= mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to db failed".mysqli_connect_error());
}
echo "connected";

$username=$_POST["email"];
$passwords=$_POST["password"];

$sql="INSERT INTO `arcade`.`logs` (`username`, `password`) VALUES ('$username', '$passwords')";

echo $sql;

if($con->query($sql)== true){
    echo "successfully insertwd";
}
else{
    echo "ERROR : $sql <br> $con->error";
}
// $con->close();

?>