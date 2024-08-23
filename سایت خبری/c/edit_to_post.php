<?php 
// this is bog 
require_once __DIR__ . "/../m/amal_ha.PHP" ; 
 
class added extends amal_ha 
{
    public $id = null;
      
    public function __construct()
    {
        parent::__construct() ; 
    
    }
    public function savee()
    {
        // this is bog 
        if(isset($_POST['submmit'])){
            echo $_POST['myTextarea']  ; 
             
        }else{
            echo 'ثیت نشده '   ; 
        }
        // this is bog and xss 
    }
    public function qw($r , $r2)
    {
       $p[] =  $this->selekt('2' , $this->get() ) ;
        print_r($p[$r][$r2]) ;
    }
    public function get ()  
    {
    return  $this->id = $_GET['id']   ; 

    }
}

$qw = new added() ;