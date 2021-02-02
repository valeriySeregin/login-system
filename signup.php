<?php 
  require 'header.php';
?>

  <div class="container">
    <h1>Signup</h1>
    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] === "emptyfields") {
          echo '<div class="alert alert-warning" role="alert">
          Fill in all fields!
        </div>';
        } else if ($_GET['error'] === "invaliduidmail") {
          echo '<div class="alert alert-warning" role="alert">
          Invalid username and email!
        </div>';
        } else if ($_GET['error'] === "invaliduid") {
          echo '<div class="alert alert-warning" role="alert">
          Invalid username!
        </div>';
        } else if ($_GET['error'] === "invalidmail") {
          echo '<div class="alert alert-warning" role="alert">
          Invalid email!
        </div>';
        } else if ($_GET['error'] === "passwordcheck") {
          echo '<div class="alert alert-warning" role="alert">
          Your passwords do not match!
        </div>';
        } else if ($_GET['error'] === "usertaken") {
          echo '<div class="alert alert-warning" role="alert">
          Username is already taken!
        </div>';
        }
      } else if ($_GET['signup'] === "success") {
        echo '<div class="alert alert-success" role="alert">
        Signup successful!
      </div>';
      }
    ?>
    <form action="includes/signup.inc.php" method="post">
      <div class="form-group">
        <input type="text" name="uid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username...">
      </div>
      <div class="form-group">
        <input type="text" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email...">
      </div>
      <div class="form-group">
        <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password...">
      </div>
      <div class="form-group">
        <input type="password" name="pwd-repeat" class="form-control" id="exampleInputPassword1" placeholder="Repeat password...">
      </div>
      <button type="submit" name="signup-submit" class="btn btn-primary">Signup</button>
    </form>
  </div>

<?php 
  require 'footer.php';
?>
