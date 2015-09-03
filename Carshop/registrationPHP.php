<?php

include 'header.php';
include 'navBar.php';
include 'connectionDB.php';

if (isset($_POST)) {
    $userName = stripslashes($_POST['userName']);
    $userName = trim($_POST['userName']);
    $userName = mysql_real_escape_string($_POST['userName']);
    $pass = stripslashes($_POST['pass']);
    $pass = trim($_POST['pass']);
    $pass = mysql_real_escape_string($_POST['pass']);
    $reppass = stripslashes($_POST['reppass']);
    $reppass = trim($_POST['reppass']);
    $reppass = mysql_real_escape_string($_POST['reppass']);
    $emailAdd = stripslashes($_POST['emailAdd']);
    $emailAdd = trim($_POST['emailAdd']);
    $emailAdd = mysql_real_escape_string($_POST['emailAdd']);
    $error = '';
    
    if ($userName === '') {
        $error .= 'Моля въведете име в полето!';
    }
    if ($pass === '') {
        $error .= 'Въведете парола!';
    }
    if ($pass !== $reppass) {
        $error .= 'Паролата не съвпада';
    }
    if (!filter_var($emailAdd, FILTER_SANITIZE_EMAIL)) {
        $error .= 'Въведете E-mail адрес в полето!' . '<br>';
    }
    if ($error === '') {
        $sql = "INSERT INTO users (username, password, repeadpass,email) VALUES ('$userName','$pass','$reppass','$emailAdd')";
        if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success" style="margin-left:280px;margin-right:370px;border-radius:10px;">
    <p style="font-family:italic;text-align:center;"><strong>Вашата регистрация беше успешна! <a href="login.php"><b>Влез от тук!<b></a></strong></p>
</div>';
        } else {
            echo '<div class="alert alert-danger" style="margin-left:280px;margin-right:370px;border-radius:10px;">
    <p style="font-family:italic;text-align:center;"><strong>Възникна грешка,моля опитайте отново <a href="registration.php"><b>ТУК!<b></a></strong></p>
</div>';
        }
    } else {
        echo $error;
    }
}
?>

<?php

include 'footer.php';
?>

