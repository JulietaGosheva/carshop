<?php
include 'header.php';
include 'navbarExit.php';
?>
<br><br>
<div class="container">
    <form id="change-form" class="form-horizontal" method="POST" action="passChagne.php">
        <div class="form-group">
            <label  for="inputPassword3" class="col-sm-1 col-sm-offset-3  control-label">Стара парола:</label>
            <div class="col-sm-4">
                <input type="password" name="newpass" class="form-control" id="password-field" placeholder="Парола...">
            </div>
            <label id="pass-error-label" style="color:#d9534f;" for="inputPassword3" class="col-sm-4 col-sm-offset-3  control-label"></label>
        </div>

        <div class="form-group">
            <label  for="inputPassword3" class="col-sm-1 col-sm-offset-3  control-label">Нова парола:</label>
            <div class="col-sm-4">
                <input type="password" name="oldpass" class="form-control" id="password-field" placeholder="Парола...">
            </div>
            <label id="pass-error-label" style="color:#d9534f;" for="inputPassword3" class="col-sm-4 col-sm-offset-3  control-label"></label>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-5">
                <input style="padding-left: 36px; padding-right: 36px;" type="submit" value="Промени" class="btn btn-primary" />
            </div>
        </div>
    </form>
</div>


<?php
include 'footer.php';
?>