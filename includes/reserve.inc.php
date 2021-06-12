<?php
//connection with database root folder
session_start();
    include_once 'dhb.inc.php';

    // input variables and names
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email =  $_POST['email'];
    $adres = $_POST['adres'];
    $number = $_POST['number'];
    $postcode =  $_POST['postcode'];
    $amount =  $_POST['amount'];
    $size =  $_POST['size'];
    $tea =  $_POST['tea'];
    $bubbles =  $_POST['bubbles'];

    //Insert data from input into database
    $sql = "INSERT INTO reserves (reserve_first, reserve_last, reserve_email, reserve_adres, reserve_number, reserve_postcode, reserve_amount, reserve_size, reserve_tea, reserve_bubbles)
                    VALUES('$first', '$last', '$email','$adres', '$number', '$postcode','$amount', '$size', '$tea','$bubbles');";
    mysqli_query($conn,  $sql);

    //redirect
    //success notify
    header("Location: ../index.php?reserve=success");