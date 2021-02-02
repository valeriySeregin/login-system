<?php

if (isset($_POST['changepwd-submit'])) {
  require 'dbh.inc.php';
  require 'helpers.inc.php';

  $oldPassword = $_POST['oldpwd'];
  $newPassword = $_POST['newpwd'];
  $newPasswordRepeat = $_POST['newpwd-repeat'];

  if (empty($oldPassword) || empty($newPassword) || empty($newPasswordRepeat)) {
    header("Location: ../changepwd.php?error=emptyfields");
    exit();
  } else if (!validatePwd($newPassword)) {
    header("Location: ../changepwd.php?error=invalidpwd");
    exit();
  } else if ($newPassword !== $newPasswordRepeat) {
    header("Location: ../changepwd.php?error=passwordcheck");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../changepwd.php?error=sqlerror");
      exit();
    } else {
      session_start();
      $userId = $_SESSION['userId'];
      mysqli_stmt_bind_param($stmt, "s", $userId);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($oldPassword, $row['pwdUsers']);
        if ($pwdCheck === false) {
          header("Location: ../index.php?error=wrongpwd");
          exit();
        } else if ($pwdCheck === true) {
          $sql = "UPDATE users SET pwdUsers=? WHERE idUsers=?";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../changepwd.php?error=sqlerror");
            exit();
          } else {
            $hashedPwd = password_hash($newPassword, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "si", $hashedPwd, $userId);
            mysqli_stmt_execute($stmt);
            header("Location: ../index.php?changepwd=success");
            exit();
          }
        } else {
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
      } else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
  msqli_stmt_close($stmt);
  msqli_close($conn);
} else {
  header("Location: ../changepwd.php");
  exit();
}
