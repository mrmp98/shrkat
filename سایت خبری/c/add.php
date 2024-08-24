<?php
 require_once __DIR__ . '/../m/amal_ha.PHP';
 require_once __DIR__ . '/../c/amniyat.php';
 session_start() ; 
 class addqw  extends amal_ha
 {
   use amniyat ; 
    public function __construct()
    {
      parent::__construct() ; 
        
  
    }
    
    public function add()
    {
      
        if(isset($_POST['submmit']))
        {
            
         if(isset($_SESSION['username']) ){
            $w = $_SESSION['username'] ;  
          }else{
            $w = $_SESSION['name'] ; 
          }               
               $mytextarea =  $this->xss($_POST['myTextarea'],FILTER_SANITIZE_SPECIAL_CHARS) ; 
               $qwasd =       $this->xss($_POST['qwasd'],FILTER_SANITIZE_SPECIAL_CHARS) ; 
                    
                    $this->add_to_post('post' ,  $w , $mytextarea , 1 , 1 , 1 , $qwasd , 1) ;
                    header('Location: ../mosharekat/');
                               
        
    }
}
}
$r = new addqw() ;
$r->add() ;  