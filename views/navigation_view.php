
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Startseite</a></li>
        <?=$helper->checkSession('
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Quiz <b class="caret"></b></a>
            <ul class="dropdown-menu navbar-inverse">
              <li><a href="?route=quizes">Quize</a></li>
              <li><a href="?route=quizes&method=create">Quiz erstellen</a></li>
            </ul>
          </li>
        ',true)?>

        <?=$helper->checkSession('
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Benutzerverwaltung <b class="caret"></b></a>
            <ul class="dropdown-menu navbar-inverse">
              <li><a href="?route=users&method=index">Benutzerliste</a></li>
              <li><a href="?route=users&method=create_form">Benutzer erstellen</a></li>
            </ul>
          </li>
        ',true)?>
        
      </ul>
      <ul class="nav navbar-nav pull-right">
        <li><a class="glyphicon glyphicon-user" href="index.php"></a></li>
        <?=$helper->checkSession('<li><a href="?route=login&method=logout">Logout</a></li>',true)?>
        <?=$helper->checkSession('<li><a href="?route=login">Login</a></li>',false)?>
      </ul>
    </div>
  </nav>
