<?php
 $servername="121.200.55.60:3307";
 $username="2019UIT1104";
 $password=" 06-05-2001";
 $database="2019UIT1104";
 $conn=mysqli_connect($servername,$username,$password,$database);
 if(!$conn){
die("connection failed:".mysqli_connect_error());
}
echo"connected successfully";
$sql="CREATE TABLE mytable(id INT(6),name VARCHAR(30)NOT NULL)";
if($conn->query($sql)===TRUE)
{
 echo"Table mytable created successfully";
}
else
{
echo"Error in creating table:".$conn->error;
}
?>
