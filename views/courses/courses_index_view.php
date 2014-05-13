<div class="container main">
  <h2>Module</h2>

  <div class="row">
    <ul class="modules-list">
      <?php foreach ($modules as $module): ?>
        <li>
          <div class="col-md-2">
            <?= $module->name ?>
          </div>
          <div class="col-md-10">
            <?php var_dump($user->answers); ?>
          </div>
        <?php endforeach; ?>
      </li>
    </ul>

  </div>

</div>
