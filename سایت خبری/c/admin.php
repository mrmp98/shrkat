<?php
 require_once __DIR__ . '/../m/amal_ha.PHP';

 class admin extends amal_ha
 {
    public function __construct()
    {
        parent::__construct() ;
        // this is bog 
      $this->senn() ; 
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

        $this->dell('');
           
    }
    public function seen ()
    {
        // this is not test
       $p[] = $this->selekt() ;
        // print_r($p);
        // echo "<br>" ; 
        // echo count($p[0]) ;
        // echo $p[0][1]['mtn'] ; 
        
        for ($i = 0; $i <count($p[0]) ; $i++)
        {
        echo  " <tr>
                <th>
                    <a href='../add post/index.php'> <i class='i' class='bi bi-pencil-fill'></i></a>
                    <i class='i' id='ashghali' class='bi bi-trash3'></i>
                    <a href='../add post/index.php'> <i class='i' class='bi bi-cloud-plus-fill'></i></a>
                    <i class='i' class='bi bi-eye-fill'></i>
                </th>
                <th>x</th>
                <th>x</th>
                <th>x</th>
                <th>x</th>
                <th>x</th>
</tr>" ;     
        }
        
    }

 }
 $r= new admin() ; 
