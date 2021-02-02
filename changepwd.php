<?php 
  require 'header.php';
?>

  <div class="container">
      <h1>Change password</h1>
      <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] === "emptyfields") {
            echo '<div class="alert alert-warning" role="alert">
            Fill in all fields!
          </div>';
          } else if ($_GET['error'] === "invalidpwd") {
            echo '<div class="alert alert-warning" role="alert">
            Your password is invalid! It should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.
          </div>';
          } else if ($_GET['error'] === "passwordcheck") {
            echo '<div class="alert alert-warning" role="alert">
            Your passwords do not match!
          </div>';
          }
        } else if ($_GET['changepwd'] === "success") {
          echo '<div class="alert alert-success" role="alert">
          Password changed successfully!
        </div>';
        }
      ?>
      <form action="includes/changepwd.inc.php" method="post">
        <div class="form-group">
          <input type="password" name="oldpwd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old password...">
        </div>
        <div class="form-group">
          <input type="password" name="newpwd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New password...">
        </div>
        <div class="form-group">
          <input type="password" name="newpwd-repeat" class="form-control" id="exampleInputPassword1" placeholder="Repeat new password...">
        </div>
        <button type="submit" name="changepwd-submit" class="btn btn-primary">Change password</button>
      </form>
    </div>

<?php 
  require 'footer.php';
?>
