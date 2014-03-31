<div class="container main">
  <table class="table">
    <thead>
      <tr>
        <th>#</th> <th>Name</th> <th>Rolle</th><th>details</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
        <td><?php echo $user->getId(); ?></td>
        <td><?php echo $user->getName(); ?></td>
        <td><?php echo $user->getRole(); ?></td>
        <td><a href="?action=user&user_id=<?php echo $user->getId(); ?>">details</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>