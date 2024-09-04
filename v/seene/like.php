<?php 
require_once __DIR__ . '/../../m/amal_ha.PHP' ;  
 
class qw extends amal_ha
{
    public function __construct()
    {
        parent::__construct();
        // this is bog  
        ($this->selekt(5 , $_POST['id']))  ; 
        exit  ; 
        echo  ($_SERVER['REQUEST_METHOD']=='POST' && $_POST['vaz']==true) ?  $this->update('post' , $_POST['id'] ,($this->selekt(5 , $_POST['id'])[0]['count_like'])+1 , 5) :'vvsdfsdfsdf'  ;        

        }
}
$R = new qw() ; 
