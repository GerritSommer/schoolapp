<?php $question = $data['question']; ?>
<div class="container main">
  <div class="row">
    <div class="col-sm-12">
      <h4 class="page-header">Frage bearbeiten</h4>
      <form role="form" action="?route=questions&method=update&question_id=<?php $question->id ?>" method="post">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" />

        <div class="form-group float-label-control">
          <label for="question">Frage</label>
          <textarea class="form-control" id="question" placeholder="Question" name="question"><?= $question->question ?></textarea>
        </div>
        <div class="form-group float-label-control">
          <label for="hint">Hinweis</label>
          <textarea class="form-control" placeholder="Hinweis" name="hint" id="hint"><?= $question->hint ?> </textarea>
        </div>

        <button class="btn pull-right btn-success" type="submit">Speichern</button>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
    <h4 class="page-header">Antworten</h4>
      <ul class="answers-list">
        <?php foreach ($question->answers as $answer): ?>
          <?php $answer_color = $answer->kind ? 'green' : 'red' ?>
          <li><a href="?route=answers&method=update&answer_id=<?= $answer->id ?>" class="color-<?= $answer_color ?>">
            <?= $answer->answer ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <a class="btn btn-default pull-right" href="?route=answers&method=create&question_id=<?= $question->id ?>">Antwort hintzufügen</a>

    </div>

  </div>
</div>