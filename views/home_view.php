<div class="container main">
  <h2>home</h2>

<?php
  $user = new User(1, $mysqli);
  echo $user->getName();
?>
</div>
