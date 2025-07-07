<?php
include("config1.php");
$b1=$_REQUEST["p1"];
$c1=$_REQUEST["p2"];
$d1=$_REQUEST["p3"];
$e1=$_REQUEST["p4"];

$sql="insert into paste(name,email,phone,writeyoursuggestion) values('$b1','$c1','$d1','$e1')";

if($conn->query($sql)===TRUE)
{
    echo"Thankyou for your feedback..";

}
else
{
    echo"try again" .$conn->error;
}
$conn->close();
?>