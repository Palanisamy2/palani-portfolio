<?php
$name=$_POST['name'];
$mobilenumber=$_POST['mobilenumber'];
$gmailid=$_POST['gmailid'];
$describe=$_POST['describe'];
$conn= new mysqli('localhost','root','','myportfolio_contact');
if($conn->connect_error)
{
    die('connection failed :'.$conn->connect_error);
}
else
{
    $stmt=$conn->prepare("insert into contact(name,mobilenumber,gmailid,describe) values(?,?,?,?)");
    $stmt->bind_param("siss",$name,$mobilenumber,$gmailid,$describe);
    echo"submition is success";
    $stmt->close();
    $conn->close();
}
?>