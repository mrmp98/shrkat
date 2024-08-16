<?php
 require_once __DIR__ . '/../m/amal_ha.PHP';

session_start();
class qw extends amal_ha 
{
  public function __construct()
  {
    parent::__construct();
     echo  (isset($_SESSION['filename'])) ? $this->sbtnam() : $this->vorod() ;
  }
  public function ScriptCode( $ho , $jsCode) 
  {
    echo "<script>";
    echo "document.querySelector('$ho').innerHTML = '$jsCode'" ; 
    echo "</script>";
  } 
  public function sbtnam () 
  {
  $this->ScriptCode("#user_1name" , $_SESSION['name']);
  $this->ScriptCode('#user_1name', $_SESSION['name']);
  $this->ScriptCode('#pass', $_SESSION['password']);
  $this->ScriptCode('#phone', $_SESSION['phone']);
  $this->ScriptCode('#semat', $_SESSION['semat']);
  $this->ScriptCode('#emil_1', $_SESSION['emil']);
 
  } 
  public function vorod()
  {
    print_r( $this->selekt('abote' , $_SESSION['username'], $_SESSION['password'])) ;
// this is bog  
    
    // is not test
  }
}
$qw = new qw();  




