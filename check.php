<?php
session_start();
//if(isset($_SESSION['shome'])){
//  header("Location:shome.php");
//  exit();
//}
$name=$_POST['username'];
$password=$_POST['password'];
$db = mysql_connect("localhost","lzzduke06","lzzduke06") or die("Error!");
mysql_select_db("login") or die("No such database".mysql_error());
$sql = "select * from login";
$result = mysql_query($sql);
if(!$result)
{
  echo "no return from database!";
}
$colum=mysql_fetch_array($result);
if(($colum['username'] == $name) && ($colum['password'] == $password))  
{ 
     $_SESSION['shome']="shome";
     header("Location:shome.php");  
}  
else{ 
     echo"<script type='text/javascript'>alert('Error Password!');location='index.html';</script>";
}
?>
