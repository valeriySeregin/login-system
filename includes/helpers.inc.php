<?php

function validatePwd($pwd) {
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

function validateEmail()
{
  return true;
}

function validateUsername()
{
  return true;
}
