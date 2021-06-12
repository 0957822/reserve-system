<?php
include_once 'connection.php';
$amount = mysqli_escape_string($conn, $_POST['size']);
$sizem = mysqli_escape_string($conn, $_POST['size']);
$sizel = mysqli_escape_string($conn, $_POST['size']);
$flavourm = mysqli_escape_string($conn, $_POST['size']);
$flavourl = mysqli_escape_string($conn, $_POST['size']);
$size = mysqli_escape_string($conn, $_POST['size']);
$teas = mysqli_escape_string($conn, $_POST['teas']);
$bubbles = mysqli_escape_string($conn, $_POST['bubbles']);
$first = mysqli_escape_string($conn, $_POST['first']);
$last = mysqli_escape_string($conn, $_POST['last']);
$email = mysqli_escape_string($conn, $_POST['email']);
$address = mysqli_escape_string($conn, $_POST['address']);
$zipcode = mysqli_escape_string($conn, $_POST['zipcode']);
$date = mysqli_escape_string($conn, $_POST['date']);
$time = mysqli_escape_string($conn, $_POST['time']);


$sql = "INSERT INTO customer ( customer_amount, customer_sizem, customer_sizel, customer_flavourm, customer_flavourl, customer_size, customer_teas, customer_bubbles, customer_first, customer_last, customer_email, customer_address
                    , customer_zipcode, customer_date, customer_time) 
            VALUES ('$amount', '$sizem', '$sizel', '$flavourm', '$flavourl', '$size', '$teas', '$bubbles', '$first', '$last', '$email', '$address', '$zipcode', '$date', '$time');";
mysqli_query($conn, $sql);
 
if($sql)
{
    echo '<script> type="text/javascript"> alert("Data Saved") </scrript>';
}
else
{
    echo '<script> type="text/javascript"> alert("Data not Saved") </scrript>';
}


echo mysqli_error($conn);

header("Location:../thankyou.php?data=success");

