<?php
$username=$_GET["username"];
$email=$_GET["email"];
$password=$_GET["password"];
$server = "localhost";
$u = "root";
$p = "";
$db="priyanshu";//register";
$c=new mysqli($server,$u,$p,$db);
if ($c->connect_error ==true)
{
die("error");
}
$s="insert into register values('".$username."','".$email."','".$password."')";
if($c->query($s)==true)
{
echo ("inserted");
}	
else
{
echo("error");	
}	
?>
