<?php
include_once 'header.php';
?>

<body>
<h2> Management </h2>
<div>
    <?php
    // gebruiker wordt begroet met de gegeven gebruikersnaam
    if (isset($_SESSION["useruid"])) {
        echo "<p> Hello there " . $_SESSION["useruid"] ."</p>";
    }
    ?>


</div>

<?php
// gegevens van de bestellingen vanuit de database worden weergegeven op de
$userid = $_SESSION["userid"];
$sql = "SELECT * FROM reserves ;";
$result = mysqli_query($conn, $sql) or die ( mysqli_error ($conn));
while($row = mysqli_fetch_array($result))
{
    echo "<br /><b>ID:</b> ". $row['reserve_id'];
    echo "<br /><b>First name:</b> ". $row['reserve_first'];
    echo "<br /><b>Last name:</b> ".$row['reserve_last'];
    echo "<br /><b>Email:</b> ".$row['reserve_email'];
    echo "<br /><b>Adress:</b> ".$row['reserve_adres'];
    echo "<br /><b>Number:</b> ". $row['reserve_number'];
    echo "<br /><b>Postcode:</b> ". $row['reserve_postcode'];
    echo "<br /><b>Amount:</b> ".$row['reserve_amount'];
    echo "<br /><b>Size:</b> ".$row['reserve_size'];
    echo "<br /><b>Tea:</b> ".$row['reserve_tea'];
    echo "<br /><b>Bubbles:</b> ".$row['reserve_bubbles'] ;
    echo "<br>";

}
mysqli_close($conn);
?>
<br>



<a class="edit" href="edit.php">Edit / Delete</a>

</body>
</html>

