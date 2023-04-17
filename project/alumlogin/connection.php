<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tpcportal";

if(!$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
  //echo "Sed Connection Successful";
}

//else echo "Connection Successful";
