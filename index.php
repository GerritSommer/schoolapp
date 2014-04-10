<?php
  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  error_reporting(-1);
  session_start();
  if (isset($_SESSION['user_id']) and is_numeric($_SESSION['user_id'])) {
    $user_is_logged_in = true;
  } else {
    $user_is_logged_in = false;
  }
?>
<!DOCTYPE html>
<html>
  <!-- include header -->
  <?php
  require_once 'includes/php-activerecord/ActiveRecord.php';
  ActiveRecord\Config::initialize(function($cfg)
  {
      $cfg->set_model_directory('models');
      $cfg->set_connections(array(
          'development' => 'mysql://root@localhost/schoolapp'));
  });
  
  ?>
  <?php require_once 'includes/header.php' ?>
<body id="fullscreen_bg" class="fullscreen_bg">

  <?php require_once 'router.php'; ?>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>