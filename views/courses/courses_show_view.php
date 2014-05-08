<div class="container main">
  <h3>Kurs: <?= $module->name ?></h3>
  <h4>Fragen</h4>
  <ul class="questions-list">
    <?php foreach ($module->questions as $question): ?>
      <li>
        <a href="?route=questions&method=update&question_id=<?= $question->id ?>">
          <?= $question->question ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>