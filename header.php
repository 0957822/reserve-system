<?php
// maakt connnectie met de file die connectie maakt met de database van de website
session_start();
include_once 'includes/dhb.inc.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="includes/8tea5.css">
    <title>Document</title>
</head>
<header>
    <div style="padding-bottom: 180px";>
        <ul class="nav1">
            <a class="home" href="index.php"><img src="image\logotekst.png"></a>
            <a class="menu" href="#Our Menu">Our Menu</a>
            <a class="story" href="#Bubble Tea Story">Bubble Tea Story</a>
            <a class="location" href="#Locations">Locations</a>
            <a class="reserve" href="reserve.php">To reserve</a>
            <?php
            // de gebruiker heeft toegang tot de volgende paginas wanneer ingelogd
            if (isset($_SESSION["useruid"])) {
                echo "<a class='login' href='profile.php'>Management</a>";
                echo "<a class='login' href='includes/logout.inc.php'>logout</a>";
            }
            else {
                echo "<a class='login' href='signup.php'>Sign up</a>";
                echo "<a class='login' href='login.php'>login</a>";
            }
            ?>
        </ul>
    </div>
</header>