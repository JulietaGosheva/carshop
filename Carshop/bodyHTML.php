<?php
include 'header.php';
include 'navBar.php';
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div align="center" class="carousel-inner" role="listbox">
        <div class="item active">
            <img style="height:300px;width:600px;"src="assets/images/kola4.jpg" alt="...">
            <div class="carousel-caption">
                <h3 style="color:black">Кола 1</h3>
                <p1>бля бля бля</p1>
            </div>
        </div>
        <div class="item">
            <img style="height:300px;width:600px;;" src="assets/images/kola3.jpg" alt="...">
            <div class="carousel-caption">

            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div id="footer"> <!-- start of footer -->

                <div class="container">

                    <div class="row">

                        <div class="col-sm-2">
                            <h5>Зa контакти : </h5>
                            <h6>preslav.maksimov@gmail.com</h6>
                        </div>

                        <div class="col-sm-4">
<!--                            <h6>За нас</h6>
                            <p>New</p>-->
                        </div>

                        <div class="col-sm-4">
<!--                            <h6>Навигация</h6>
                            <ul class="unstyled">
                                <li><a href="#">Обекти</a></li>
                                <li><a href="#">Поръчки</a></li>
                                <li><a href="#">Супервайзъри</a></li>
                                <li><a href="#">Панел</a></li>
                            </ul>-->
                        </div>

                        <div class="col-sm-2">
                            <h6>Copyright &copy 2015</h6>
                        </div>

                    </div>

                </div>

            </div> <!-- end of footer -->
<?php include 'footer.php'; ?>

