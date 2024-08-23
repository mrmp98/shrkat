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
    public function js($r)
    {
        echo "<script>$r</script>"; 
    }
    
   
    public function daste_bandi($r , $r2)
    {
       return $this->selekt($r , $r2);
    }
        public function seen ()
    {
        // this is not test
        $p[] = $this->selekt();
        for ($i = 0; $i < count($p[0]); $i++) {
            print_r("<tr>
                    <th>
                        <a href='../add post/index.php?id={$p[0][$i]['id']}'><i class='i bi bi-pencil-fill edit'></i></a>
                        <i class='i bi bi-trash3 x' id='".$p[0][$i]['id'] . "'></i>
                        <i class='i bi bi-eye-fill '></i>
                    </th>
                    <td class='' id='" . $p[0][$i]['id'] . "'>" . $p[0][$i]['seen'] . "</td>
                    <td class='' id='" . $p[0][$i]['id'] . "'>" . $p[0][$i]['edit'] . "</td>
                    <td class='' id='" . $p[0][$i]['id'] . "'>" . $this->daste_bandi(1 , $p[0][$i]['daste_bandi']) . "</td>
                    <td class=' post'  id='" . $p[0][$i]['id'] . "'>" .  $p[0][$i]['mtn']  . "</td>
                    <td class='' id='" . $p[0][$i]['id'] . " '>" . $p[0][$i]['titel'] . "</td>
                  </tr>" );
                  
        }
        
        
    }

 }
