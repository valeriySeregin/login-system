<?php

function validatePwd($pwd)
{
  $uppercase = preg_match('/[A-Z]/', $pwd);
  $lowercase = preg_match('/[a-z]/', $pwd);
  $number = preg_match('/[0-9]/', $pwd);
  $specialChars = preg_match('/[^\w]/', $pwd);
  $length = strlen($pwd) >= 8;

  if (!$uppercase || !$lowercase || !$number || !$specialChars || !$length) {
      return false;
  }

  return true;
}

function processPasswordChangingErrors()
{
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
    } else if ($_GET['error'] === "recaptchafail") {
      echo '<div class="alert alert-warning" role="alert">
      Recapthca check failed!
    </div>';
    } else if ($_GET['error'] === "recaptchaerr") {
      echo '<div class="alert alert-warning" role="alert">
      Recapthca check error!
    </div>';
    }
  } else if (isset($_GET['changepwd'])) {
    if ($_GET['changepwd'] === "success") {
      echo '<div class="alert alert-success" role="alert">
      Password changed successfully!
    </div>';
    }
  }
}
