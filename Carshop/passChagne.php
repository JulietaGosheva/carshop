<?php

session_start();

if (isset($_SESSION['username'])) {
    header("Location:loginsuccess.php");
}
include 'connectionDB.php';

if (isset($_POST)) {
    $newpass = stripslashes($_POST['newpass']);
    $newpass = trim($_POST['newpass']);
    $newpass = mysql_real_escape_string($_POST['newpass']);
    $oldpass = stripslashes($_POST['oldpass']);
    $oldpass = trim($_POST['oldpass']);
    $oldpass = mysql_real_escape_string($_POST['oldpass']);

    $error = '';

    if ($newpass === '') {
        echo $error .= 'Липсва въведена информация в полето!';
    }

    if ($oldpass === '') {
        echo $error .= 'Липсва въведена информация в полето';
    }
    if ($newpass != $oldpass) {
        echo 'Паролата не съвпада!';
    } else if ($error === '') {
        $sql = ""
    }
}
?>