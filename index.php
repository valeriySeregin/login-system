<?php 
  require 'header.php';
?>

  <main>
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<p class="text-center">You are logged in!</p>
        <a href="changepwd.php">I want to change password</a>';
      } else {
        echo '<p class="text-center">You are logged out!</p>';
      }
    ?>
  </main>

<?php 
  require 'footer.php';
?>
