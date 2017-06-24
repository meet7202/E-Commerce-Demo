  <?php require 'includes/common.php'; ?>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php

        require 'includes/header.php';
        $sq="select * from items";
        $res=$mysqlConnection->query($sq);
        ?>

       <div class="container" id="content">

            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3><?php  $temp = $res->fetch_object(); echo $temp->name; ?> </h3>
                            <p>Price: Rs. <?php  echo $temp->price; ?> </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <footer>
            <?php require 'includes/footer.php'; ?>
        </footer>
    </body>
</html>
