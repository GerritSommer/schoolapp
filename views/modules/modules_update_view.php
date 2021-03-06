  <?php $module = $data['module']; ?>
  <div class="container main">
  <div class="row">
    <div class="col-sm-8">
      <h4 class="page-header">Modul bearbeiten</h4>

      <form role="form" action="?route=modules&method=update" method="post">
        <input type="hidden" name="module_id" value="<?= $module->id ?>" />

        <div class="form-group">
          <label for="name">Titel</label>
          <input type="text" class="form-control" id="name" placeholder="Titel" name="name" value=<?= $module->name ?>>
        </div>
        <div class="form-group">
          <label for="description">Beschreibung</label>
          <Textarea type="text" id="description" class="form-control" placeholder="Beschreibung" name="description"><?= $module->description ?></Textarea>
        </div>
        <button class="btn btn-success" type="submit">Speichern</button>
      </form>

    </div>
  </div>
</div>


