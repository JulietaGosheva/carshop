<?php

include 'header.php';
if (isset($_SESSION['username'])) {
    header('Location:loginsuccess.php');
}
include 'navBar.php';
include 'connectionDB.php';

if (isset($_POST)) {

    $userName = stripslashes($_POST['username']);
    $userName = trim($_POST['username']);
    $userName = mysql_real_escape_string($_POST['username']);
    $passWord = stripslashes($_POST['password']);
    $passWord = trim($_POST['password']);
    $passWord = mysql_real_escape_string($_POST['password']);

    $error = '';
    if ($userName === '') {
        echo $error .= 'Липсва въведено име в полето!';
    }
    if ($passWord === '') {
        echo $error .= 'Липсва въведена парола в полето!';
    }
    if ($error === '') {
        $sql = ("SELECT * FROM users WHERE username='$userName' and password='$passWord'");
        $result = $conn->query($sql);
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['groups'] = $row['groups'];
            header("Location: loginsuccess.php");
        } else {
            echo 'nesyshtest potrebitel';
        }
    } else {
        echo $error;
    }
}
?>


<?php

include 'footer.php';
?>
