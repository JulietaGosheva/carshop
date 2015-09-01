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
                <h3 style="color:black">Кола 1</h3>
                <p1>бля бля бля</p1>
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
<br>
<div class="row">
  <div class="col-sm-5 col-sm-offset-5 col-md-2">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>

