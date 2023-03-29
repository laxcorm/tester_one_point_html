<?php
if ($_SESSION['error'] ?? false) { ?>
  <div class="alert alert-danger row" role="alert">
    Input data is not correct
  </div>
<?php
  unset($_SESSION['error']);
}
?>
<form action="common/auth.php" class="row bg-dark p-3 mb-5" method="post">
  <div class="col-1"></div>
  <div class="col-4">
    <input type="text" class="form-control" placeholder="Login" name="login">
  </div>
  <div class="col-4">
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
  <button class="col-2 btn btn-warning text-dark" type="submit">Log in</button>
  <div class="col-1"></div>
</form>

<div class="row">
  <div class="card text-center mt-5">
    <div class="card-body col">
      <a href="user/start.php" class="btn btn-success">Start test</a>
    </div>
  </div>
</div>