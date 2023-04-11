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
  <div class="col-2"><button class="form-control btn btn-admin text-dark" type="submit">Log in</button></div>
  <div class="col-1"></div>
</form>

<div class="row">
  <div class="card text-center mt-5 border-0">
    <div class="card-body">
      <a href="user/start.php" class="col-2 btn btn-start">Start test</a>
    </div>
  </div>
</div>