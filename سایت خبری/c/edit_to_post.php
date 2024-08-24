<?php 
// this is bog 
require_once __DIR__ . "/../m/amal_ha.PHP" ; 
 require_once __DIR__ ."/amniyat.php";
class added extends amal_ha 
{
    use  amniyat ; 
    public $id = null;
      
    public function __construct()
    {
        parent::__construct() ; 
    
    }
    public function savee()
    {
         
        if(isset($_POST['submmit']))
        {
            $text =  $_POST['myTextarea'] ; 
            $titel=  $_POST['qwasd'] ;
            $this->update('post' , $this->get(),$this->xss($text , FILTER_SANITIZE_SPECIAL_CHARS ) , $this->xss($titel , FILTER_SANITIZE_SPECIAL_CHARS )) ; 
            $this->conn = null ; 
            header('location:../mosharekat/') ; 
            exit ; 
        }
    }
    public function qw($r , $r2)
    {
       $p[] =  $this->selekt('2' , $this->get() ) ;
        print_r($p[$r][$r2]) ;
    }
    public function get ()  
    {
         
    return  $_GET['id']   ; 
         
    }
}

$qw = new added() ;