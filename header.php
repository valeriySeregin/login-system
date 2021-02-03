<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <?php
            if (isset($_SESSION['userId'])) {
              echo '<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
            </form>';
            } else {
              echo '<form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
              <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username...">
              <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password...">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login-submit">Login</button>
            </form>
            <a class="nav-link" href="signup.php">Signup</a>';
            }
          ?>
        </div>
      </nav>
    </header>