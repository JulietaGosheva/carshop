    </div>
    <div id="footer"> 
        <div class="container">
            <div class="row">

                <div class="col-sm-2">
                    <h5>Зa контакти : </h5>
                    <h6>julietagosheva@gmail.com</h6>
                </div>

                <div class="col-sm-4">
                    <h6>За нас</h6>
                    <p>New</p>
                </div>

                <div class="col-sm-4">
                    <h6>Навигация</h6>
                    <ul class="unstyled">
                        <li><a href="#">Обекти</a></li>
                        <li><a href="#">Поръчки</a></li>
                        <li><a href="#">Супервайзъри</a></li>
                        <li><a href="#">Панел</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h6>Copyright &copy 2015</h6>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/jquery/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php
        if (isset($currentPage) === TRUE) {
            if ($currentPage === "login.php") {
                echo "<script type='text/javascript' src='assets/js/login.js'></script>";
            } else if ($currentPage === "registration.php") {
                echo "<script type='text/javascript' src='assets/js/registration.js'></script>";
            }
        }
    ?>
    </body>
</html>
