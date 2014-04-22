  <div class="container main">
  <div class="row">
    <div class="col-sm-8">
      <h4 class="page-header">Neue Frage</h4>

      <form role="form" action="?route=questions&method=create" method="post">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" />

        <div class="form-group">
          <label for="question">Frage</label>
          <input type="text" class="form-control" id="question" placeholder="Frage" name="question">
        </div>

        <div class="form-group">
          <label for="hint">Hinweis</label>
          <input type="text" id="hint" class="form-control" placeholder="Hint" name="hint">
        </div>

        <div class="form-group">
          <label for="module_id">Modul</label>
          <select name="module_id" id="module_id" class="form-control">
            <?php
              foreach ($data['modules'] as $module){
                echo '<option value="'. $module->id .'">'. $module->name . '</option>';
              }
            ?>
          </select>

        </div>
        <button class="btn btn-success" type="submit">
          Speichern
        </button>
      </form>

    </div>
  </div>
</div>


