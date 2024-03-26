<?php
$server = "localhost";
$u = "root";
$p = "";
$db="priyanshu";//register";
$c=new mysqli($server,$u,$p,$db);
$username=$_GET["username"];
$password=$_GET["password"];
if ($c->connect_error ==true)
{
die("error");
}
else
echo "connected\n"."<br>"."";
$query="Select * from register where username='$username' and password='$password'";
$result=mysqli_query($c,$query);
if(mysqli_num_rows($result)>0){
    echo "USer found and you can Avail Discounts\n";
    header("Location: homepage.html");
}
else{
    echo "You Must Register First";
}
?>
