
<?php
  /*
   * Enable PHP-Shorttags [<?=$val?><?..code..?>]
   */
  ini_set('short_open_tag', 'On');

  /*
   * Init Session
   */
  session_start();

  /*
   * Rquire Application Configuration
   */
  require_once 'config/app_config.php';

  /*
   * Require Autoloader
   */
  require_once 'includes/autoloader.php';

  /*
   * Autoinstall Database
   */
  if(INSTALL){
    Helper::updateDatabase();
  }

  if(DEBUG){
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);
  }

  if (isset($_SESSION['user_id']) and is_numeric($_SESSION['user_id'])) {
    $user_is_logged_in = true;
  } else {
    $user_is_logged_in = false;
  }

  /*
   * Active Record Init
   */
  require_once 'includes/php-activerecord/ActiveRecord.php';
  ActiveRecord\Config::initialize(function($cfg)
  {
      $cfg->set_model_directory('models');
      $cfg->set_connections(array(
          'development' => 'mysql://'.DB_USER.'@'.DB_HOST.'/'.DB_NAME));
  });

  /*
   * Routing
   */
  $route = isset($_GET['route']) ? $_GET['route'] : 'home';
  $method = isset($_GET['method']) ? $_GET['method'] : 'index';

  $controller_name = $route."_controller";
  $view_name = $route."_".$method;

  $controller = new $controller_name();
  $helper = new Helper();

  $data = $controller->$method();

  /*
   * Require Template (HTML+Style)
   */
  require_once 'includes/template.php';
  ?>