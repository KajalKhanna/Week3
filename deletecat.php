<?php
session_start();
$i=$_SESSION["id"];

var_dump($v3);
$con = mysqli_connect("localhost","task","kajal@1999") or die("cann't connect to database server");
mysqli_select_db($con,"task") or die("database not found");
$sql="DELETE FROM category where `id`='$i'";
$res= mysqli_query($con,$sql);


?>