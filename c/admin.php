<?php
 require_once __DIR__ . '/../m/amal_ha.PHP';

 class admin extends amal_ha
 { 
     public $p = [] ; 
    public function __construct()
    {
        parent::__construct() ;
   
      $this->seen() ; 
       $this->conn = null ; 

    }
    public function daste_bandi($r , $r2)
    {
       return $this->selekt($r , $r2);
    }
    public function chek_vaziyat()
    {
         
        if($_SESSION['vaziyat']== 'admin')
        {

           return $this->p[] = $this->selekt();
        }else
        {
           return $this->p[] =$this->selekt(2 ,13 );
            
        }
    }
        public function seen ()
    {
    
        $this->chek_vaziyat()  ;
         
        for ($i = 0; $i < count($this->p[0]); $i++)
         {
            print_r("<tr>
                    <th>
                        <a href='../edit post/index.php?id={$this->p[0][$i]['id']}'><i class='i bi bi-pencil-fill edit'></i></a>
                        <i class='i bi bi-trash3 x' id='".$this->p[0][$i]['id'] . "'></i>
                         <a href='../seen/index.php?id={$this->p[0][$i]['id']}'><i class='i bi bi-eye-fill '></i></a>
                    </th>
                    <td class='' id='" . $this->p[0][$i]['id'] . "'>" . $this->p[0][$i]['seen'] . "</td>
                    <td class='' id='" . $this->p[0][$i]['id'] . "'>" . $this->p[0][$i]['edit'] . "</td>
                    <td class='' id='" . $this->p[0][$i]['id'] . "'>" . $this->daste_bandi(1 , $this->p[0][$i]['daste_bandi']) . "</td>
                    <td class=' post'  id='" . $this->p[0][$i]['id'] . "'>" .  $this->p[0][$i]['mtn']  . "</td>
                    <td class='' id='" . $this->p[0][$i]['id'] . " '>" . $this->p[0][$i]['titel'] . "</td>
                  </tr>" );
                  
        }
        
        
    }

 }
