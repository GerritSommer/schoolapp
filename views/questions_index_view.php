
<div class="container-fluid container main">
  <div class="container container-pad">
    <div class="row">
      <div class="col-md-12">
        <h1>Fragen</h1>
        <p>ein kleiner Subtext</p>
      </div>
    </div>

    <div class="row">
      <?php foreach($data['questions'] as $question): ?>
        <div class="box-shad question-card">
          <h4>
            <span>Frage</span>
            <small class="pull-right"><?php echo $question->category->name; ?> <?php echo date('d.m.Y H:i', $question->date_created); ?></small> <br>

<!--             <small><a class="pull-right" href="?route=questions&method=delete&question_id=<?= $question->id ?>">
                Anworten anzeigen
              </a>
            </small>
            <br> -->
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
        </div>

      <?php endforeach; ?>
      <div class="clearfix"></div>
    </div><!-- End row -->
  </div><!-- End container -->
</div>