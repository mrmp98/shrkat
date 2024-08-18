<?php
 require_once __DIR__ . '/../m/amal_ha.PHP';

 class admin extends amal_ha
 {
    public function __construct()
    {
        parent::__construct() ;
        // this is bog 
      $this->seen() ; 
       $this->conn = null ; 

    }
   
    public function del ()  
    {
        // this is bog 

        $this->dell('');
           
    }
    public function seen ()
    {
        // this is not test
        $p[] = $this->selekt();

        
        for ($i = 0; $i < count($p[0]); $i++) {
            echo "<tr>
                    <th>
                        <a href='../add post/index.php'><i class='i bi bi-pencil-fill'></i></a>
                        <i class='i bi bi-trash3' id='ashghali'></i>
                        <a href='../add post/index.php'><i class='i bi bi-cloud-plus-fill'></i></a>
                        <i class='i bi bi-eye-fill'></i>
                    </th>
                    <th>" . $p[0][$i]['seen'] . "</th>
                    <th>". $p[0][$i]['edit'] . "</th>
                    <th>". 'ok'.  "</th>
                    <th  class='post'>". $p[0][$i]['mtn'] . "</th>
                    <th>". $p[0][$i]['titel'] . "</th>
                  </tr>";
        }
        
    }

 }
