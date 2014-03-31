<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Ein title</title>
<!--   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="shortcut icon" type="image/png" href="favicon.png"> -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container main">
    <?php require_once 'views/navigation_view.php'; ?>
    <?php require_once 'router.php'; ?>
  </div>

</body>
</html>
