<?php 
// this is bog 
require_once __DIR__ . "/../m/amal_ha.PHP" ; 
 
class added extends amal_ha 
{
    public $id = null;
    public function __construct()
    {
        parent::__construct() ; 
        //   this is bog 
        // xss 
         print_r($this->selekt('2' , $this->get() )) ; 
        $this->conn = null ; 
    }
    public function get ()  
    {
    return  $this->id = $_GET['id']   ; 

    }
}
$qw = new added() ; 