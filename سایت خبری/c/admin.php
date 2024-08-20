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
    
    public function del()  
    {
        $this->js('
            const x = document.querySelectorAll(".x");
            x.forEach(c => {
                c.addEventListener("click", function() {
                    console.log(this.id); // اینجا id را در کنسول چاپ می‌کند
                    // می‌توانید هر عملی دیگری که می‌خواهید با this.id انجام دهید
                });
            });
        ');  
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
                        <i class='i bi bi-trash3 x' id='".$p[0][$i]['id'] . "'></i>
                        <a href='../add post/index.php'><i class='i bi bi-cloud-plus-fill'></i></a>
                        <i class='i bi bi-eye-fill x'></i>
                    </th>
                    <td class='x' id='" . $p[0][$i]['id'] . "'>" . $p[0][$i]['seen'] . "</td>
                    <td class='x' id='" . $p[0][$i]['id'] . "'>" . $p[0][$i]['edit'] . "</td>
                    <td class='x' id='" . $p[0][$i]['id'] . "'>" . 'ok' . "</td>
                    <td class='x post'  id='" . $p[0][$i]['id'] . "'>" . $p[0][$i]['mtn'] . "</td>
                    <td class='x' id='" . $p[0][$i]['id'] . " '>" . $p[0][$i]['titel'] . "</td>
                  </tr>";
        }
        
        
    }

 }
