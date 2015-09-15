<nav class="navbar navbar-inverse nav-tabs" style="background-color:#555; border-radius:inherit; width:100%;">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?php
                if ($currentPage === "") {
                    echo "active";
                }
                ?>"><a href="#" style="font-family:'Arial Black', Gadget, sans-serif;">За нас</a></li>
                <li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="#" style="font-family:'Arial Black', Gadget, sans-serif;">Информация<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Плащане</a></li>
                        <li><a href="#">Доставки</a></li>
                        <li><a href="#">Как да поръчам?</a></li>
                        <li><a href="#">Обищи условия</a></li>
                    </ul>
                </li>
                <li class="<?php
                if ($currentPage === "") {
                    echo "active";
                }
                ?>"><a href="#" style="font-family:'Arial Black', Gadget, sans-serif">Контакти</a></li>
                <li class="<?php
                if ($currentPage === "") {
                    echo "active";
                }
                ?>"><a href="#" style="font-family:'Arial Black', Gadget, sans-serif">Нашите магазини</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php
                if ($currentPage === "registration.php") {
                    echo "active";
                }
                ?>"><a href="registration.php" style="font-family:'Arial Black', Gadget, sans-serif;color:#d9534f"><span class="glyphicon glyphicon-user"></span> Регистрация</a></li>
                <li class="<?php
                if ($currentPage === "login.php") {
                    echo "active";
                }
                ?>"><a href="login.php" style="font-family:'Arial Black', Gadget, sans-serif;color:#337ab7"><span class="glyphicon glyphicon-log-in"></span> Вход</a></li>
            </ul>
        </div>
    </div>
</nav>

<div style="min-height: 100px; margin-top: -25px; background: #6699CC">
    <table style="min-width: 100%;">
        <th></th>
        <th></th>
        <tr>
            <td style="float: left; margin-left: 25px;">
                <a class="navbar-brand myLogo" href="bodyHTML.php">
                    <img src="assets/images/logo.jpg" style="height:80px; width: 280px; border-radius:25px;" />
                </a>
            </td>
            <td style="float:right; margin-right: 25px; padding-top: 30px;">
                <form class="navbar-form navbar-right " role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" style="height:33px;width:290px;padding:17px;border-radius:10px;" placeholder="Търси">
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search" style="height:40px;width:50px;margin-top:-5px;border-radius:10px;"></button>
                </form>
            </td>
        </tr>
    </table>
</div>

<nav class="navbar navbar-default"style="border-radius:inherit; background-color:#6699CC; border-style:hidden;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class=" nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family:'Arial Black', Gadget, sans-serif">ТУНИНГ<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family:'Arial Black', Gadget, sans-serif">ЕЛЕКТРОНИКА<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family:'Arial Black', Gadget, sans-serif">АЕРОДИНАМИКА<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family:'Arial Black', Gadget, sans-serif">ТУНИНГ СВЕТЛИНИ<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family:'Arial Black', Gadget, sans-serif">ЕЛЕКТРОНИКА<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family:'Arial Black', Gadget, sans-serif">ПОВЕЧЕ МОЩНОСТ<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family:'Arial Black', Gadget, sans-serif">КСЕНОН<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family:'Arial Black', Gadget, sans-serif">ИНТЕРИОР<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>