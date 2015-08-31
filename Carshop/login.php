<?php
include 'header.php';
$currentPage = "login.php";
include 'navBar.php';
?>

<br><br>
<div class="container">
<form class="form-horizontal">
    <div class="form-group">
        <label for="inputName3" class="col-sm-1 col-sm-offset-3  control-label">Име:</label>
        <div class="col-sm-4">
            <input type="Name" class="form-control" id="inputEmail3" placeholder="Име...">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-1 col-sm-offset-3  control-label">Парола:</label>
        <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Парола...">
        </div>
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
            <button style="padding-left: 36px; padding-right: 36px;" type="submit" class="btn btn-primary">Вход</button>
        </div>
    </div>
</form>
</div>
<?php include 'footer.php'; ?>
