<?php
    if (isset($_POST["submit"])){

    $first = $_POST['first'];
    $last =  $_POST['last'];
    $email = $_POST['email'];
    $uid =  $_POST['uid'];
    $pwd =  $_POST['pwd'];
    $pwdRepeat =  $_POST['pwdRepeat'];

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
            VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
    mysqli_query($conn, $sql);

    header("Location: ../index.php?signup=success");

    require_once 'dhb.inc.php';
    require_once 'functions.inc.php';
    if (emptyInputSignup($first, $last, $email, $uid, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($uid) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $uid, $email) !== false) {
        header("location: ../signup.php?error=uidtaken");
        exit();
    }
    createUser($conn, $first, $last, $email, $uid, $pwd);
    }
    else {
            header("location: ../signup.php");
            exit();
    }
