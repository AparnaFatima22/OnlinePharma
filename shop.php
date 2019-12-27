<?php require_once("../resources/config.php");
//5) CONECTING functions.php
  ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") //9) including header.php file separating the HTML file?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header >
          <h1>Shop</h1>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Medicines</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
            <?php get_products_in_shop_page();?>
        </div>
        <!-- /.row -->

        <hr>
    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php")
//11) including footer.php file separating the HTML file ?>


</body>

</html>
