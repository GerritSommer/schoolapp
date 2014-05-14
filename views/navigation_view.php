
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <!--Home-->
        <?php
          if(isset($_SESSION['user_id'])){
            ?>
            <li><a href="index.php">Startseite</a></li>
            <?php
          }?>

        <!--Modules-->
        <?=$helper->ifRoleIs('
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Module <b class="caret"></b></a>
            <ul class="dropdown-menu navbar-inverse">
              <li><a href="?route=modules">Module</a></li>
              <li><a href="?route=modules&method=create">Modul erstellen</a></li>
            </ul>
          </li>
        ',array('admin','teacher'))?>
        <!--Student Modules-->
        <?=$helper->ifRoleIs('
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Kurse <b class="caret"></b></a>
            <ul class="dropdown-menu navbar-inverse">
              <li><a href="?route=courses&method=index">Verfügbare Kurse</a></li>
            </ul>
          </li>
        ',array('all'))?>

        <!--Benutzer-->
        <?=$helper->ifRoleIs('
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Benutzerverwaltung <b class="caret"></b></a>
            <ul class="dropdown-menu navbar-inverse">
              <li><a href="?route=users&method=index">Benutzerliste</a></li>
              <li><a href="?route=users&method=create_form">Benutzer erstellen</a></li>
            </ul>
          </li>
        ',array('admin','teacher'))?>
      </ul>
      <ul class="nav navbar-nav pull-right">
        <li><a class="glyphicon glyphicon-user" href="?route=users&method=profile"></a></li>
        <?=$helper->ifRoleIs('<li><a href="?route=login&method=logout">Logout</a></li>',array('admin','student','teacher'))?>
        <?php
          if(!isset($_SESSION['user_id'])){
            ?>
            <li><a href="?route=login">Login</a></li>
            <?php
          }?>
      </ul>
    </div>
  </nav>
