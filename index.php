<?php require_once("../resources/config.php");
//5) CONECTING functions.php
  ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") //9) including header.php file separating the HTML file?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!--13) Categories here -->
            <?php include(TEMPLATE_FRONT . DS . "side_nav.php") // including side_nav.php file separating the HTML file?>


            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <!-- 14) Courser -->
                         <?php include(TEMPLATE_FRONT . DS . "slider.php") // including slider.php file separating the HTML file?>
                    </div>

                </div>

                <div class="row">

                    <?php get_products(); ?>

                </div>

            </div>

        </div>

    </div>

<?php include(TEMPLATE_FRONT . DS . "footer.php")  
//11) including footer.php file separating the HTML file ?>

</body>

</html>
