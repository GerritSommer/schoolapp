  <div class="container main">
  <div class="row">
    <div class="col-sm-8">
      <h4 class="page-header">Neue Frage</h4>
      <form role="form" action="?route=questions&method=create" method="post">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" />

        <div class="form-group float-label-control">
          <textarea class="" placeholder="Question" name="question"></textarea>
          <label for="">Question</label>
        </div>
        <div class="form-group float-label-control">
          <textarea class="" placeholder="Hint" name="hint"></textarea>
          <label for="">Hint</label>
        </div>
        <div class="form-group float-label-control">
        Kategorie:
          <select name="category_id" >
            <?php
              foreach ($data['categories'] as $category){
                echo '<option value="'. $category->id .'">'. $category->name . '</option>';
              }
            ?>
          </select>
          <button class="btn pull-right btn-success" type="submit">
            Speichern
          </button>
        </div>
      </form>
    </div>
  </div>
</div>