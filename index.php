<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "sucess connecting to the db";
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `us trip` ( `Name`, `age`, `gender`, `email`, `Phone`, `desc`, `DD`) VALUES ( '$name', '$age', '$gender','$age', '$email', '$phone', '$desc', current_timestamp());";
echo $sql;
?>