<?php
  $answer = $data['answer'];
  $question = $answer->question;
?>
<div class="container main">
  <div class="row">
    <div class="col-sm-8">
      <h4><small class="pull-right">Modul: <?=$question->module->name?></small></h4>
      <p>Frage: <?=$question->question?></p>
      <small>Hinweis: <?=$question->hint?></small>
      <div class="clearfix"></div>
    </div>
    <div class="col-sm4"></div>

    <div class="col-sm-8">
      <h4 class="page-header">Antwort bearbeiten</h4>
      <form role="form" action="?route=answers&method=update" method="post">
        <input type="hidden" name="id" value="<?=$answer->id?>" />
        <div class="form-group float-label-control">
          <label for="answer">Antwort</label>
          <textarea class="form-control" id="answer" placeholder="Antwort" name="answer"><?= $answer->answer ?></textarea>
        </div>
        <div class="form-group float-label-control">
          <input type="checkbox" name="kind" value="<?= $answer->kind ?>"/>
          <label for="kind">Richtige Antwort</label>
        </div>
        <button class="btn btn-lg btn-block btn-success" type="submit">
          Speichern
        </button>
      </form>
    </div>
    <div class="col-sm4"></div>

  </div>
</div>