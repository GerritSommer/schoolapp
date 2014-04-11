<div class="container main">
  <h2>users</h2>
  <table class="table">
    <thead>
      <tr>
        <th>#</th> <th>Name</th> <th>Rolle</th><th>details</th><th>löschen</th><th>bearbeiten</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($data['users'] as $user): ?>
        <tr>
        <td><?php echo $user->id; ?></td>
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->role; ?></td>
        <td><a href="?route=users&method=show&id=<?php echo $user->id; ?>">details</a></td>
        <td><a href="?route=users&method=delete&id=<?php echo $user->id; ?>">löschen</a></td>
        <td><a href="?route=users&method=update&id=<?php echo $user->id; ?>">bearbeiten</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>