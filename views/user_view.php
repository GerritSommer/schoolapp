<div class="container main">
  <h2>home</h2>
  <div class="well">
    <div class="span6">
      <h4>Basisdaten</h4>
      <dl class="dl">
        <dt>id</dt>
        <dd>#<?php echo $user->getId(); ?></dd>
        <dt>Name</dt>
        <dd><?php echo $user->getName(); ?></dd>
        <dt>Role</dt>
        <dd><?php echo $user->getRole(); ?></dd>
      </dl>
    </div>
  </div>
</div>