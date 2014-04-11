<div class="container main">
  <h2>quiz</h2>
  <div class="row">
    <?php
    foreach($data['quizzes'] as $quiz){
      foreach ($data['categories'] as $cat){
        if($cat->id == $quiz->id_category){
          $category = $cat->name;
        }
      }
      ?>
    <div class=" well">
      <div class="span6">
        <div class="span6">
          <?php echo $quiz->question; ?>
        </div>
        <div class="span6">
          <?php echo $quiz->hint; ?>
        </div>
        <div class="span12">
          <?php echo $category; ?> <?php echo date('d.m.Y H:i', $quiz->date_created); ?>
          <form action="?route=answers&method=create" method="POST">
            <input type="hidden" value="<?php echo $quiz->id; ?>" name="quiz_id" />
            <button class="btn pull-right" type="submit">Antwort hinzufügen</button>
          </form>
        </div>
      </div>
    </div>
      <?php
    }
    ?>
    <div class="span6">
      
    </div>
  </div>
</div>