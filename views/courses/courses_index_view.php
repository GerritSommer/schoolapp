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
        /* get the answered question of this module by the user
        *  and get the damn correct answers of each module
        *  AAAAANNNNDD get the users_correct answers
        *  php sucks !! no time to find a nicer way
        */
        $modules_question_ids          = array_map(function($question){ return $question->id; }, $module->questions);
        $modules_answered_question_ids = array_intersect($modules_question_ids, $answered_questions_ids);
        $modules_answers               = [];
        foreach($module->questions as $question) { $modules_answers = array_merge($modules_answers, $question->answers); };
        $correct_modules_answers       = array_filter($modules_answers, function($answer) { return $answer->kind === 1; });
        $users_correct_answers         = array_filter($user->answers, function($answer) { return $answer->kind === 1; });
        $correct_modules_answers_ids   = array_map(function($answers){ return $answers->id; }, $correct_modules_answers);
        $users_correct_answers_ids     = array_map(function($answers){ return $answers->id; }, $users_correct_answers);
        // omg why am i doing this??!?? we need computed propterties or something
        $users_correct_answers_ids_of_this_module = array_intersect($users_correct_answers_ids, $correct_modules_answers_ids);

      ?>
        <li>
          <div class="col-sm-2">
              <?= $module->name ?>
          </div>
          <div class="col-sm-10">
            <?= sizeof($modules_answered_question_ids) ?> von <?= sizeof($modules_question_ids) ?> Fragen wurden beantwortet.
            Davon sind <?=  round((count($users_correct_answers_ids_of_this_module) / count($modules_answers))*100, 2); ?>% richtig.
            <?php if(sizeof($modules_answered_question_ids) !== sizeof($modules_question_ids)): ?>
              <a href="?route=courses&method=ask_question&module_id=<?= $module->id ?>">Fragen beanworten</a>
            <?php endif; ?>

          </div>
        <?php endforeach; ?>
      </li>
    </ul>
    <br />
    <br />
    <br />
    <div class="col-sm-12">
      <a href="uploads/PT_Aufgabe_test.pka" download="PT_Aufgabe_test.pka">Download Packet Tracer PKA</a>
    </div>






  </div>

</div>
