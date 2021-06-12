<?php
function emptyInputSignup($first, $last, $email, $uid, $pwd, $pwdRepeat) {
    $result;
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// checked of de gebruikersnaam bestaat uit een selectie van tekens
function invalidUid($uid) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// checked of de email echt is
function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// checked of het wachtwoord de tweede keer het zelfde is als de eerste keer
function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== ($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// check of de gebruikersnaam / email al in de database is
function uidExists($conn, $uid, $email) {
 $sql= "SELECT * FROM users WHERE user_uid = ? OR user_email = ?;";
 $stmt = mysqli_stmt_init($conn);
 if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("location: ../signup.php?error=stmtfailed");
     exit();
 }

 mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
 mysqli_stmt_execute($stmt);

 $resultData = mysqli_stmt_get_result($stmt);

 if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
 }
 else {
     $result = false;
    return $result;
 }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $first, $last, $email, $uid, $pwd) {
    $sql= "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ? ,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
// wachtwoord word gehashed zodat het veilig blijft en niet meer tezien is wat het echte wachtwoord was
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($uid, $pwd) {
    $result;
    if (empty($uid) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $uid, $pwd) {
    $uidExists = uidExists($conn, $uid, $uid);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["user_pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] =  $uidExists["user_id"];
        $_SESSION["useruid"] =  $uidExists["user_uid"];
        header("location: ../index.php?succes");
        exit();
    }
}

