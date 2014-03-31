<?php
  $sql = 'SELECT id, name, role FROM users';
  $result = $mysqli->query($sql);
?>
<div class="container main">
  <table class="table">
    <thead>
      <tr>
        <th>#</th> <th>Name</th> <th>Rolle</th>
      </tr>
    </thead>
    <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["role"]; ?></td>
    <?php endwhile; ?>
    </tbody>
  </table>
</div>