<?php
$started_modules_ids    = array_map(function($module){ return $module->id; }, $started_modules);
$answered_questions_ids = array_map(function($answer){ return $answer->id; }, $answered_questions);
?>

<div class="container main">
  <h2>Module</h2>

  <div class="row">
    <ul class="modules-list">
      <?php foreach ($modules as $module): ?>
      <?php
        // get the answered question of this module by the user
        // php sucks !!
        $module_questions_answered     = [];
        $modules_question_ids          = array_map(function($question){ return $question->id; }, $module->questions);
        $modules_answered_question_ids = array_intersect($modules_question_ids, $answered_questions_ids);
      ?>
        <li>
          <div class="col-md-2">
              <?= $module->name ?>
          </div>
          <div class="col-md-10">
            <?= sizeof($modules_answered_question_ids) ."/". sizeof($modules_question_ids); ?>
            <?php if(sizeof($modules_answered_question_ids) !== sizeof($modules_question_ids)): ?>
              <a href="?route=courses&method=ask_question&module_id=<?= $module->id ?>">Fragen beanworten</a>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </li>
    </ul>

  </div>

</div>
