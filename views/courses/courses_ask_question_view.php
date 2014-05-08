<div class="container main">
  <div class="row">
    <div class="col-sm-12">
      <h4 class="page-header"><?= $question->question ?></h4>
      <form action="?route=courses&method=check_question">
        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
        <input type="hidden" name="module_id" value="<?= $module->id ?>">
        <input type="hidden" name="question_id" value="<?= $question->id ?>">

        <?php foreach($question->answers as $answer): ?>
          <div class="radio">
            <label>
              <input type="radio" name="answer_id" id="optionsRadios1" value="<?= $answer-id ?>">
              <?= $answer->answer ?>
            </label>
          </div>
        <?php endforeach; ?>
        <hr>
        <button class="btn btn-default" type="submit">bestätigen</button>
      </form>
    </div>
  </div>
</div>