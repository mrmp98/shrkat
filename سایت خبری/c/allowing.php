<?php 
// this is bog 
require_once __DIR__ . "/../m/amal_ha.PHP" ; 
class Allowing extends amal_ha
 {
    public function __construct()
    {
        parent::__construct(); 
       $this->dide_shodan() ; 
    }
    public function user($r , $r1 , $r3=null)
    {
       return  $this->selekt($r , $r1)[$r3];
         
    }
    public function dide_shodan()
    {
        $x[] = $this->selekt(6) ;
        
        
        for ($i = 0; $i < count($x[0]); $i++){
              
             
        print_r(
            "<tr>
            <th>
    <i style='border: 5px solid red ;  ' class='bi bi-x'></i>
    <i style='border: 5px solid red ; margin-left: 30px;' class='bi bi-check-lg'></i>
            </th>
            <th>" . $x[0][$i]['mtn'] .  " </th>
            <th>" . $x[0][$i]['titel'] .  " </th>
            <th>" . $this->user(3 ,$x[0][$i]['user'] ,'user')  .  " </th>
            <th> ". $x[0][$i]['zman']  . " </th>
            <th>" . $this->selekt(1,$x[0][$i]['daste_bandi'])  . " </th>
        </tr>"
        ) ; 
    } ; 
}

}
$e = new Allowing() ; 
