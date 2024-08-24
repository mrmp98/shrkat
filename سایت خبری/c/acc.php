<?php
 require_once __DIR__ . '/../m/amal_ha.PHP';

session_start();
class qw extends amal_ha 
{
  public function __construct()
  {
    parent::__construct();
       (isset($_SESSION['filename'])) ? $this->sbtnam() : $this->vorod() ;
       $this->conn = null ; 

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
  public function admin ($r) 
  {

    return ($r == '1') ? 'کاربر عادی' : 'admin'  ; 
  }
  public function vorod()
  {
    unset($_SESSION['filename']);
    
  $t[] = ( $this->selekt($_SESSION['username'], $_SESSION['password'])) ;
  
    $this->ScriptCode('#user_1name' , $t[0]['user']);
    $this->ScriptCode('#emil_1', $t[0]['email']);
    $this->ScriptCode('#pass',   $t[0]['password']);
    $this->ScriptCode('#semat',  $this->admin($t[0]['semat']));
    $this->ScriptCode('#phone',  $t[0]['phone']);
    
  }
}
$qw = new qw();  
