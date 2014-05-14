<?php
$users_answers   = $user->answers;
$correct_answers = array_filter($users_answers, function($answer) use($user) { return $answer->kind === 1; });
$users_questions = array_map(function($answer){ return $answer->question; }, $users_answers);
$users_modules   = array_map(function($question){ return $question->module; }, $users_questions);
?>
<div class="container main">
  <h2>Profil</h2>
  <div class="row">
    <div class="col-md-12">
      <h4>Basisdaten</h4>
    </div>
    <div class="col-md-6">
      <div class="well">
        <dl class="dl">
          <dt>id</dt>
          <dd>#<?php echo $user->id; ?></dd>
          <dt>Name</dt>
          <dd><?php echo $user->name; ?></dd>
          <dt>Role</dt>
          <dd><?php echo $user->role; ?></dd>
        </dl>
      </div>
    </div>
    <div class="col-md-6">
      <div class="well">
        <dl class="dl">

          <dt>Kurse</dt>
          <dd><?= count($users_modules); ?> von <?= count($modules); ?> erledigt</dd>
          <dt>Durchschnitt</dt>
          <dd><?= round((count($correct_answers) / count($users_answers)), 2)*100; ?>%</dd>

        </dl>
      </div>
    </div>
  </div>
</div>