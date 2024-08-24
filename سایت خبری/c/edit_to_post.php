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
        if(isset($_POST['submmit'])){
            // this is bog
            $this->update( xss (titel and mtn update) , shart id == id get)
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