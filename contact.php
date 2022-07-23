<?php
$server="localhost";
$username="root";
$password="";
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$con=mysqli_connect($server,$username,$password,"portfolio");
if(!$con){
    die("connection is failed due to".mysqli_connect_error());
}
echo" successfull connection";
$qry="INSERT INTO `karan` (`name`, `email`, `subject`, `messsage`) VALUES ('$name', '$email', '$subject', '$message');";
$result=mysqli_query($con,$qry);

if($result)
{
    echo " data added";
} 
else{
    echo " data not added";
}
?>