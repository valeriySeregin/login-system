<?php 
  require 'header.php';
  require 'includes/helpers.inc.php';
?>

  <div class="container">
      <h1>Change password</h1>
      <?php
        processPasswordChangingErrors();
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
        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
        <button type="submit" name="changepwd-submit" class="btn btn-primary">Change password</button>
      </form>
    </div>

<?php 
  require 'footer.php';
?>
