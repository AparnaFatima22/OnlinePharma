<?php require_once("../resources/config.php");
//5) CONECTING functions.php
  ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") //9) including header.php file separating the HTML file?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
        <div class="col-sm-4 col-sm-offset-5">
            <form class="" action="" method="post" enctype="multipart/form-data">
                <div class="form-group"><label for="">
                    username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="text" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>


    </header>


        </div>

        <?php include(TEMPLATE_FRONT . DS . "footer.php")
        //11) including footer.php file separating the HTML file ?>
    <!-- /.container -->

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
