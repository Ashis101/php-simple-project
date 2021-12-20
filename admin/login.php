<!DOCTYPE html>
<html lang="en">
    <?php 
    include_once('./admin_partials/head.php');
    include_once('../partials/db/connect.php');
    include_once('admin_partials/session.php');
    ?>
<body>
    <div style="width: 100%;padding: 10%;">
    <form method="POST" action="handler/login.php" style="width: 50%;margin-left:20%;padding:20px">
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember</label>
  </div>
<button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
    </div>
</body>
</html>