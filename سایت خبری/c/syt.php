<?php
require_once __DIR__ . "/../m/amal_ha.PHP" ; 
class safe  extends amal_ha
{
    public function __construct()
    {
        parent::__construct();
    }
    public function selektt($w , $w2){
       return $this->selekt($w , $w2)  ;
    } 

    public function seen()
    {
        $p[] = $this->selekt();
        for ($i = 0; $i <count($p[0]); $i++)
         { 
       
            print_r("
    <a href='../seene/index.php?id={$p[0][$i]['id']}'>
        
            <div class='container'>
            <div class='row'>
                <div class='col-12  mt-3 d-flex'>
                    <div class='col-6  d-flex justify-content-around post' style='color : white'>
                   
                        
                            <p class='text-white' dir='rtl'>
                           " . $p[0][$i]['mtn'] . "
                            </p>
                       
                    </div>
                    <div class='col-6 ' dir='rtl'>
                        <div class='d-flex'>
                            <button class='btn btn-primary d-flex'>
                                <i class='bi bi-circle-fill ms-2'></i>
                                <h6>" .$this->selektt(1 , $p[0][$i]['daste_bandi']). "</h6>
                            </button>
                            
                        </div>
                        <h4 class='mt-3 text-white'> " . $p[0][$i]['titel'] . "</h4>
                        <span class='d-flex'>
                            <h6 class='text-white me-3 '>" .$this->selektt(3 ,$p[0][$i]['user'])['user']. "</h6>
                            <h6 class='text-white me-3 dete-section'>" . $p[0][$i]['zman'] . "</h6>
                            <h5 class='text-white me-3 mt-1 time-section'><i class='bi bi-clock ms-2'></i>20 دقیقه زمان
                                مطالعه</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <hr style='color : white'>
        </a>");
                  
        }
        
        
    }

    }
$safe = new safe() ; 
$safe->seen() ; 