  <?php require 'includes/common.php';
  if(isset($_REQUEST['submit'])) {


  $oldpw = md5($_POST['old-password']);
  $password = md5($_POST['password']);
  $vpassword = md5($_POST['password1']);


  echo $sql = "SELECT * FROM users WHERE email='$email' and password='$oldpw'";
  $result = $mysqlConnection->query($sql);
    $count = ($result->num_rows);
        // To protect MySQL injection (more detail about MySQL injection)
      echo $count,"  ", $password ," ", $vpassword;
        if( ($password==$vpassword) AND ($count==1) ) {
            //$password = stripslashes($password);
            $password = md5($password);
                         $email = $_SESSION['email'];
                              $sql = "UPDATE users set password='$password' WHERE password='$oldpw'";
                              $result = $mysqlConnection->query($sql);

                              ?>
                              <script>
                                  window.location = "products.php";
                              </script>
                              <?php


                          }

                          else {
                              ?>
                              <script>
                                  alert('email id or Password is incorrect');
                              </script>
                              <?php

                          }

  }

?>
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require 'includes/header.php'; ?>

        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required>
                        </div>
                        <button type="submit" name='submit' class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <?php require 'includes/footer.php'; ?>
        </footer>
    </body>
</html>