<?php
include 'header.php';
$currentPage = "registration.php";
include 'navBar.php';
?>

<br>
<div class="alert alert-info" style="margin-left:280px;margin-right:370px;border-radius:10px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p style="font-family:italic;text-align:center;"><strong>За да бъде успешна вашата регистрация всички полета трябва да бъдат попълнени!</strong></p>
</div>
<br>
<div class="container">
    <form class="form-horizontal" action="registrationPHP.php" method="POST">
        <div class="form-group">
            <label for="inputName3" class="col-sm-offset-2 col-sm-2 control-label">Име:</label>
            <div class="col-sm-4">
                <input type="Name" name="userName" class="form-control" id="inputEmail3" placeholder="Име...">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-offset-2 col-sm-2 control-label">Имейл адрес:</label>
            <div class="col-sm-4">
                <input type="email" name="emailAdd" class="form-control" id="inputEmail3" placeholder="Имайл адрес.">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-offset-2 col-sm-2 control-label">Парола:</label>
            <div class="col-sm-4">
                <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Парола...">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPasswordRep3" class="col-sm-offset-2 col-sm-2 control-label">Повтори парола:</label>
            <div class="col-sm-4">
                <input type="password" name="reppass" class="form-control" id="inputPasswordRep3" placeholder="Повтори парола...">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-3">
                <button style="padding-left: 25px; padding-right: 25px;" type="submit" class="btn btn-danger">Регистрация</button>
            </div>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>
