<?php
include_once 'header.php';
?>
<body>
</div>
<form action="includes/login.inc.php" method="POST" class="login">
    <p class="login">login</p>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Login</button>
</form>
<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information!</p>";
    }
}
?>

<script src="app.js"></script>
</body>
</html>