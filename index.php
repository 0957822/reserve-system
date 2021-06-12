<?php
    include_once 'header.php';
?>
<body>
<?php
if (isset($_SESSION["useruid"])) {
    echo "<p> Hello there " . $_SESSION["useruid"] ."</p>";
}
?>

<h1> Order or event </h1>

}
    <div>
        <ul style="padding-left: 350px";>
            <a class="home" href="reserve.php"><img src="image\Middel1.png"></a>
            <a class="home" href="event.php"><img src="image\Middel2.png"></a>
        </ul>
    </div>
     <script src="app.js"></script>
</body>
</html>


