<?php $question = $data['question']; ?>
<div class="container main">
  <div class="row">
    <div class="col-sm-8">
      <h4><small class="pull-right">Modul: <?= $question->module->name; ?></small></h4>
      <p>Frage: <?= $question->question; ?></p>
      <small>Hinweis: <?= $question->hint; ?></small>
      <div class="clearfix"></div>
    </div>
    <div class="col-sm4"></div>

    <div class="col-sm-8">
      <h4 class="page-header">New Answer(s)</h4>
      <form role="form" action="?route=answers&method=create" method="post">
        <input type="hidden" name="question_id" value="<?php echo $data['question']->id; ?>" />
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" />
        <div class="form-group float-label-control">
          <label for="answer">Answer</label>
          <textarea class="form-control" id="answer" placeholder="Antwort" name="answer"></textarea>
        </div>
        <div class="form-group float-label-control">
          <input type="checkbox" name="kind" value="1"/>
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