<?php
include("config.php");
$b1=$_REQUEST["r1"];
$c1=$_REQUEST["r2"];
$d1=$_REQUEST["r3"];
$e1=$_REQUEST["r4"];

$sql="insert into form(name,email,phone,message)values('$b1','$c1','$d1','$e1')";
if($conn->query($sql)===TRUE)
{
    echo"we will call u soon..";

}
else
{
    echo"try again" .$conn->error;
}
$conn->close();
?>