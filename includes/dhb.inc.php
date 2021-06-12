<?php
// maakt connectie met de daadwerkelijke database van de website "reserve"
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "reserve";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,  $dbName);

if (!$conn) {
   die("Connection failed: " . msql_connect_error());
}