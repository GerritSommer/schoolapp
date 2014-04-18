<div class="container main">
  <h2>quiz</h2>
  <div class="row">
    <?php foreach($data['quizzes'] as $quiz): ?>
    <div class=" well">
      <div class="span6">
        <div class="span6">
          <?php echo $quiz->question; ?>
        </div>
        <div class="span6">
          <?php echo $quiz->hint; ?>
        </div>
        <div class="span12">
          <?php echo $quiz->category->name; ?> <?php echo date('d.m.Y H:i', $quiz->date_created); ?>
          <div> <a class="btn btn-primary" href="?route=answers&method=create&quiz_id=<?= $quiz->id ?>">Antwort hinzufügen</a></div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <div class="span6">

    </div>
  </div>
</div>