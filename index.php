<?php
  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  error_reporting(-1);
?>
<!DOCTYPE html>
<html>
  <!-- include header -->
  <?php require_once 'includes/header.php' ?>
<body id="fullscreen_bg" class="fullscreen_bg">
  <?php require_once 'views/navigation_view.php'; ?>
  <?php require_once 'router.php'; ?>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>