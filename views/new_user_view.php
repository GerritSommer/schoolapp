<div class="container main">
  <div class="row">
    <div class="col-sm-8">
      <h4 class="page-header">New User</h4>
      <form role="form" action="?action=post_new_user" method="post">
        <div class="form-group float-label-control">
          <input type="text" class="form-control empty" placeholder="Username" name="name">
          <label for="">Username</label>
        </div>
        <div class="form-group float-label-control">
          <input type="password" class="form-control empty" placeholder="Password" name="password">
          <label for="">Password</label>
        </div>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default">
            <input type="radio" name="role" id="admin" value="admin" checked>
            Admin
          </label>
          <label class="btn btn-default">
            <input type="radio" name="role" id="teacher" value="teacher">
            Teacher
          </label>
          <label class="btn btn-default">
            <input type="radio" name="role" id="inputWalls" value="student">
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