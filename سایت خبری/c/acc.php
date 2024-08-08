<?php
session_start();
function neveshte($param, $text)
{
  echo  "<script>document.querySelector('$param').innerHTML = '$text'</script>";
}
if ($_SESSION['filename'] == 'sbtnam') {
  neveshte('#user_1name', $_SESSION['name']);
  neveshte('#pass', $_SESSION['password']);
  neveshte('#brac_daye', $_SESSION['bracday']);
  neveshte('#semat', $_SESSION['semat']);
  neveshte('#emil_1', $_SESSION['emil']);
} else {
  neveshte('#user_1name', $_SESSION['filename']);
  neveshte('#pass', $_SESSION['username']);
  neveshte('#brac_daye', $_SESSION['passsword']);
  neveshte('#semat', $_SESSION['semat']);
  neveshte('#emil_1', $_SESSION['emil']);
}
