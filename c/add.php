<?php
require_once __DIR__ . '/../m/amal_ha.PHP';
require_once __DIR__ . '/../c/amniyat.php';
session_start();
class addqw  extends amal_ha
{
  use amniyat;
  public $mozo = ['', 'ورزشی', 'سیاسی', 'خاورمیانه'];
  public function __construct()
  {
    parent::__construct();
    
  }
  public function getid()
  {
    $this->selekt();
  }
  public function mozoe($r)
  {
    $r = array_search($r, $this->mozo);
    if ($r) {
      return $r;
    } else {
      die('هک کار درستی نیست ');
    }
  }
  public function add()
  {
    echo $this->getid();
    if (isset($_POST['submmit'])) {

      if (isset($_SESSION['username'])) {

        $e =   $this->selekt(4, $_SESSION['username']);
      } else {

        $e =  $this->selekt(4, $_SESSION['name']);
      }
      
      $mozoo       =  $this->xss($this->mozoe($_POST['dastebandi']), FILTER_SANITIZE_SPECIAL_CHARS);
      $mytextarea =  $this->xss($_POST['myTextarea'], FILTER_SANITIZE_SPECIAL_CHARS);
      $qwasd      =  $this->xss($_POST['qwasd'], FILTER_SANITIZE_SPECIAL_CHARS);

      $this->add_to_post('post',  $e, $mytextarea, 1, 1, $mozoo, $qwasd, 1, 0);
      $this->update('abote' , $e , 6 , $this->selekt(9 , $e)['count_post']+1) ; 
      header('Location: ../mosharekat/');
    }
  }
}
$r = new addqw();
$r->add();
