<?php $user = $data['user']; ?>
<div class="container main">
  <div class="row">
    <div class="col-sm-8">
      <h4 class="page-header">Benutzer bearbeiten</h4>
      <form role="form" action="?route=users&method=update" method="post">
        <input type="hidden" name="id" value="<?php echo $user->id ?>">
        <div class="form-group float-label-control">
          <input type="text" class="form-control empty" placeholder="Username" name="name" value="<?php echo $user->name ?>">
          <label for="">Username</label>
        </div>
        <div class="form-group float-label-control">
          <input type="password" class="form-control empty" placeholder="Password" name="password" value="">
          <label for="">Password</label>
        </div>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default <?php echo ($user->role == "admin" ? 'active' : '') ?>">
            <input type="radio" name="role" id="admin" value="admin" <?php echo ($user->role == "admin" ? 'checked' : '') ?>>
            Admin
          </label>
          <label class="btn btn-default <?php echo ($user->role == "teacher" ? 'active' : '') ?>">
            <input type="radio" name="role" id="teacher" value="teacher" <?php echo ($user->role == "teacher" ? 'checked' : '') ?>>
            Teacher
          </label>
          <label class="btn btn-default <?php echo ($user->role == "student" ? 'active' : '') ?>">
            <input type="radio" name="role" id="inputWalls" value="student" <?php echo ($user->role == "student" ? 'checked' : '') ?>>
            Student
          </label>
        </div>
        <button class="btn btn-lg btn-block btn-success" type="submit">
          Speichern
        </button>
      </form>
    </div>
  </div>
</div>