<div class="container main">
  <h2>Module</h2>
  <table class="table">
    <p>
      Überarbeiten... Teilnehmer, Inhalte etc... keine Tabelle!
    </p>
    <thead>
      <tr>
        <th>#</th> <th>Name</th><th>löschen</th><th>bearbeiten</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($data['modules'] as $module): ?>
        <tr>
        <td><?php echo $module->id; ?></td>
        <td><?php echo $module->name; ?></td>

        <td><a href="?route=users&method=show&id=<?=$module->id?>">details</a></td>
        <td><a href="?route=users&method=delete&id=<?=$module->id?>">löschen</a></td>
        <td><a href="?route=users&method=update&id=<?=$module->id?>">bearbeiten</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>