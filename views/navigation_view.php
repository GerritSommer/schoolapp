
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Startseite</a></li>

        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">Quiz <b class="caret"></b></a>
          <ul class="dropdown-menu navbar-inverse">
            <li><a href="?route=quizes">Quize</a></li>
            <li><a href="?route=quizes&method=create">Quiz erstellen</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">Benutzerverwaltung <b class="caret"></b></a>
          <ul class="dropdown-menu navbar-inverse">
            <li><a href="?route=users&method=index">Benutzerliste</a></li>
            <li><a href="?route=users&method=create_form">Benutzer erstellen</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav pull-right">
        <li><a class="glyphicon glyphicon-user" href="index.php"></a></li>
        <?php if(isset($_SESSION['user_id']) and is_numeric($_SESSION['user_id'])): ?>
          <li><a href="?route=login&method=logout">Logout</a></li>
        <?php else: ?>
          <li><a href="?route=login">Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
