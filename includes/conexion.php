<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'test';
$db = mysqli_connect($server,$username,$password,$database);
mysqli_query($db,"SET NAMES 'utf8'");
session_start();
 ?>