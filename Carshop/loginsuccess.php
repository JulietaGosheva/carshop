<?php
include 'header.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$currentPage = 'loginsuccess.php';
include 'navbarExit.php';
?>
<h1>Hello!</h1>
<?php include 'footer.php' ?>