<?php
$n=$_POST['uname'];
$e=$_POST['uemail'];
$m=$_POST['umessage'];

//database connection
$con=mysqli_connect("localhost","root","","user_data");

//connect data to database
$sql="INSERT INTO details(name,email,message)values('$n','$e','$m')";

$r=mysqli_query($con,$sql);

if($r)
{
    echo "User Details Added Successfully";
}
else{
    echo "User Details Not Added";
}
?>