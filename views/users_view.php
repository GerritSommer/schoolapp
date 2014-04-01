<div class="container main">
  <h2>users</h2>
  <table class="table">
    <thead>
      <tr>
        <th>#</th> <th>Name</th> <th>Rolle</th><th>details</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
        <td><?php echo $user->id; ?></td>
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->role; ?></td>
        <td><a href="?action=user&user_id=<?php echo $user->id; ?>">details</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>