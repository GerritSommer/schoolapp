<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Startseite</a></li>
      <li><a href="?action=quiz">Quiz</a></li>
      <li><a href="?action=users">Users</a></li>
      <li><a href="?action=new_user">New User</a></li>
    </ul>
    <ul class="nav navbar-nav pull-right">
      <li><a class="glyphicon glyphicon-user" href="index.php"></a></li>
      <?php if(isset($_SESSION['user_id']) and is_numeric($_SESSION['user_id'])): ?>
        <li><a href="?action=logout">Logout</a></li>
      <?php else: ?>
        <li><a href="?action=login">Login</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>