<?php
include 'header.php';
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
    if ($error === '') {
        $sql = ("SELECT * FROM users WHERE username='$userName' and password='$passWord'");
        $result=$conn->query($sql);
    }
    
}
?>


<?php 
include 'footer.php';
?>
