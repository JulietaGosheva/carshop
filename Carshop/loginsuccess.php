<?php
include 'header.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$currentPage = 'loginsuccess.php';
include 'navBar.php';
?>
<h1>Hello!</h1>
<?php include 'footer.php' ?>