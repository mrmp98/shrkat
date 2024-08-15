<?php
 require_once __DIR__ . '/../m/amal_ha.PHP';

session_start();
function ScriptCode( $ho , $jsCode) {
  echo "<script>";
  echo "document.querySelector('$ho').innerHTML = '$jsCode'" ; 
  echo "</script>";
}
if (isset($_SESSION['filename'])) {
ScriptCode("#user_1name" , $_SESSION['name']);
  ScriptCode('#user_1name', $_SESSION['name']);
  ScriptCode('#pass', $_SESSION['password']);
  ScriptCode('#phone', $_SESSION['phone']);
  ScriptCode('#semat', $_SESSION['semat']);
  ScriptCode('#emil_1', $_SESSION['emil']);
  
} else {
  // selekt 
  // is not test 
} 




