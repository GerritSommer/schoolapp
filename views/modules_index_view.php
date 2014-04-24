<div class="container main">
  <h2>Module</h2>

  <div class="row">

    <ul class="modules-list">
      <?php foreach ($data['modules'] as $module): ?>
        <li>
          <div class="col-md-4">
          <a href="?route=modules&method=show&module_id=<?=$module->id?>"><?= $module->name; ?></a>

          </div>
          <div class="col-md-6">

            <small><a href="?route=modules&method=delete&module_id=<?=$module->id?>">löschen</a></small>
            <small><a href="?route=modules&method=update&module_id=<?=$module->id?>">bearbeiten</a></small>
          </div>
        <?php endforeach; ?>
      </li>
    </ul>

  </div>

</div>

<!-- <h4>
  <span>Frage</span>
  <small class="pull-right"><?php echo $question->module->name; ?> <?php echo date('d.m.Y H:i', $question->date_created); ?></small> <br>


  <small class="pull-right"><a class="pull-right text-danger" href="?route=questions&method=delete&question_id=<?= $question->id ?>">Frage löschen</a></small>
</h4>
<p><?php echo $question->question; ?></p>
<small> <?php echo $question->hint; ?></small>
<div><a class="btn btn-primary pull-right" href="?route=answers&method=create&question_id=<?= $question->id ?>">Antwort hinzufügen</a></div>
<div class="clearfix"></div>
<h4>Antworten</h4>
<ul>
  <?php foreach($question->answers as $answer): ?>
    <li><?= $answer->answer ?></li>
  <?php endforeach ?>
</ul>
 -->