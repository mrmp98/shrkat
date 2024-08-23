<?php
 require_once __DIR__ . '/../m/amal_ha.PHP';
    session_start() ; 
 class add  extends qw
 {
    public function __construct()
    {
      parent::__construct() ; 
        
    
    }
    
    public function add(){
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['myTextarea']))
            {
                if(isset($_SESSION['name']))
                {
                    $this->add_to_post('post' , $_SESSION['name'] , 1 , $_POST['myTextarea'] , 0) ;
                }else{
                    $this->add_to_post('post' , $_SESSION['filename']  , 1 , $_POST['myTextarea'] ,0) ;

                }
               
                header('Location: ../acc/acc.php');
        }
    }
}
}