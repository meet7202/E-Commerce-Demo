  <?php require 'includes/common.php'; ?>
    <?php

session_start();
session_unset();
session_destroy();


?>
  <script>
      window.location = "index.php";
  </script>
