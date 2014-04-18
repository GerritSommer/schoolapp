<div class="container main">
  <div class="row">
    <div class=" well">
      <div class="span6">
        <div class="span6">
          <?php echo $data['quiz']->question; ?>
        </div>
        <div class="span6">
          <?php echo $data['quiz']->hint; ?>
        </div>
        <div class="span12">
          <?php echo $data['quiz']->category->name; ?> <?php echo date('d.m.Y H:i', $data['quiz']->date_created); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <h4 class="page-header">New Answer(s)</h4>
      <form role="form" action="?route=answers&method=create" method="post">
        <input type="hidden" name="quiz_id" value="<?php echo $data['quiz']->id; ?>" />
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" />

        <div class="form-group float-label-control">
          <textarea class="" placeholder="Answer" name="answer"></textarea>
          <label for="">Answer</label>
        </div>
        <div class="form-group float-label-control">
          <input type="checkbox" name="kind" value="1"/>
          <label for="kind">Richtig</label>
        </div>
        <button class="btn btn-lg btn-block btn-success" type="submit">
          Speichern
        </button>
      </form>
    </div>
  </div>
</div>