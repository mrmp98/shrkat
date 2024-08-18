<?php
 require_once __DIR__ . '/amal_ha.php';

 class admin extends qw
 {
    public function __construct()
    {
        parent::__construct() ;
        // this is bog 
           (substr(($_SERVER['SCRIPT_FILENAME']), -11 )== 'c/admin.php')? $this->user()  : $this->admin() ; 
       $this->conn = null ; 

    }
     public function js( $ho , $jsCode) 
  {
    echo "<script>";
    echo "" ; 
    echo "</script>";
  }  
    public function del ()
    {
        // this is bog 

        // $this->dell('');
           
    }
    public function senn ()
    {
        // this is not test
        $this->selekt() ; 
        
    }

 }
 $r= new admin() ; 
