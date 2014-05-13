<?php
  spl_autoload_register(function ($route_name) {
    $directories = array('controllers/','includes/');
    $route_name = lcfirst($route_name);
    foreach ($directories as $directory) {
      if(file_exists($directory . $route_name . ".php")) {
        require_once $directory . $route_name . ".php";
      }
    }
  });
?>