<?php

$serverName="localhost";
$dBUsername="root";
$DbPassword="";
$dBName="login";

$conn  = mysqli_connect($serverName, $dBUsername, $DbPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}