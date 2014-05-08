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

            Anzahl Fragen: <?=count($module->questions)?>
            <?php
            $modules_done = 0;
            if(isset($user->courses)){
              $modules_done = count($user->courses->find_by_module_id($module->id));
            }

            echo "Beantwortet: ".$modules_done;

            if($modules_done < count($module->questions)){
              echo '<a href="?route=courses&method=show&module_id='.$module->id.'">Modul '.$module->name.' starten</a>';
            }
            ?>
          </div>
        <?php endforeach; ?>
      </li>
    </ul>

  </div>

</div>
