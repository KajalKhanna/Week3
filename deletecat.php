<?php
session_start();
$i=$_SESSION["id"];
require_once('./config/db1.php');
deleteRecord('category','id');
$res= mysqli_query($con,$sql);


?>