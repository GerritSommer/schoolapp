  <div class="container main">
  <div class="row">
    <div class="col-sm-8">
      <h4 class="page-header">Neue Frage</h4>

      <form role="form" action="?route=questions&method=create" method="post">
        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>" />
        <input type="hidden" name="module_id" value="<?= $_GET['module_id']; ?>" />
        <div class="form-group">
          <label for="question">Frage</label>
          <input type="text" class="form-control" id="question" placeholder="Frage" name="question">
        </div>

        <div class="form-group">
          <label for="hint">Hinweis</label>
          <input type="text" id="hint" class="form-control" placeholder="Hint" name="hint">
        </div>

        <button class="btn btn-success" type="submit">
          Speichern
        </button>
      </form>

    </div>
  </div>
</div>


