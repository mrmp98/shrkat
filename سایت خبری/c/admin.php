<?php
 require_once __DIR__ . '/amal_ha.php';

 class admin extends qw
 {
    public function __construct()
    {
        parent::__construct() ;
        
           (substr(($_SERVER['SCRIPT_FILENAME']), -11 )== 'c/admin.php')? $this->user()  : $this->admin() ; 
       $this->conn = null ; 

    }
     public function js( $ho , $jsCode) 
  {
    echo "<script>";
    echo "document.querySelector('$ho').innerHTML = '$jsCode'" ; 
    echo "</script>";
  }  
    public function del ()
    {
        $this->js('bi-trash3' , $this->dell() ) ; 
           
    }
    public function senn ()
    {
        $this->js('bi-pencil-fill' , $this->selekt()) ; 
        
    }
    public function admin()
    { 
        $this->add_to_post() ; 
        $this->del() ; 
        $this->edit();
    }
 }
 $r= new admin() ; 
