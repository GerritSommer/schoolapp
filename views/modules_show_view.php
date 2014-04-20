<?php $module = $data['module']; ?>
<div class="container main">
  <h3>Modul: <?= $module->name ?></h3>
  <h4>Fragenliste</h4>
  <ul>
    <?php foreach ($module->questions as $question): ?>
      <li>
        <a href="?route=questions&method=update&question_id=<?= $question->id ?>">
          <?= $question->question ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>