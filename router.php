<?php
require_once 'models/user.php';
require_once 'includes/helper.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'home';

if (isset($_SESSION['user_id']) and is_numeric($_SESSION['user_id'])) {
  switch($action) {
    case 'users':
      $data['users'] = User::find('all');
      break;
    case 'user':
      if(is_numeric($_REQUEST['user_id'])) { $data['user'] = User::find($_REQUEST['user_id']); }
      break;
    case 'post_new_user':
      $data['user'] = $helper->loadController($action);
      break;
    default:
      break;
  }
} else {
  # if the user is not logged in, he needs to sign in
  switch($action) {
    case 'post_login':
      $helper->loadController($action);
      isset($_SESSION['user_id']) ? $action = 'home' : $action = 'login';
      break;
    default:
      $action = "login";
      break;
  }
}
$data ? $data : $helper->loadController($action);
echo $data['user']->name;
require_once 'views/navigation_view.php';
$helper->loadView($action, $data);
?>
<div class="container well">
  <?php
  // var_dump($_REQUEST);
  // var_dump($_SESSION);
   ?>
</div>