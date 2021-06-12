<?php
include_once 'header.php';
?>

<body>
<form action="includes/signup.inc.php" method="POST" class="signup">
    <p class="signup">Sign Up</p>
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="email">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <input type="password" name="pwdRepeat" placeholder="Repeat password">
    <br>
    <button type="submit" name="submit">Sign up</button>
</form>
<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Password doesn't match!</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong, try again!</p>";
    }
    else if ($_GET["error"] == "uidtaken") {
        echo "<p>Username already taken!</p>";
    }
    else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
    }
}
?>


</body>
</html>