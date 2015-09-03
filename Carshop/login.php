<?php
include 'header.php';
$currentPage = "login.php";
include 'navBar.php';
?>

<br><br>
<div class="container">
    <form id="login-form" class="form-horizontal" method="POST" action="loginPHP.php">
        <div class="form-group">
            <label for="inputName3" class="col-sm-1 col-sm-offset-3  control-label">Име:</label>
            <div class="col-sm-4">
                <input type="Name" class="form-control" id="name-field" placeholder="Име...">
            </div>
            <label id="name-error-label" style="color:#d9534f;" for="inputPassword3" class="col-sm-4 col-sm-offset-3  control-label"></label>
        </div>
        <div class="form-group">
            <label  for="inputPassword3" class="col-sm-1 col-sm-offset-3  control-label">Парола:</label>
            <div class="col-sm-4">
                <input type="password"  class="form-control" id="password-field" placeholder="Парола...">
            </div>
            <label id="pass-error-label" style="color:#d9534f;" for="inputPassword3" class="col-sm-4 col-sm-offset-3  control-label"></label>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-5">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Запомни ме
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-5">
                <input style="padding-left: 36px; padding-right: 36px;" type="submit" value="Вход" class="btn btn-primary" />
            </div>
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>
