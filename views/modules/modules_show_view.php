<div class="container main">
  <h3>Modul: <?= $module->name ?></h3>
  <h4>Fragenliste</h4>
  <ul class="questions-list">
    <?php foreach ($module->questions as $question): ?>
      <li>
        <a href="?route=questions&method=update&question_id=<?= $question->id ?>">
          <?= $question->question ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
  <a class="btn btn-default pull-right" href="?route=questions&method=create&module_id=<?= $module->id ?>">Frage erstellen</a>
</div>