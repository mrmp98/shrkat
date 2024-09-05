<?php
// this is bog 
require_once __DIR__ . "/../m/amal_ha.PHP";
require_once __DIR__ . "/amniyat.php";

class added extends amal_ha
{
    use  amniyat;
    public function __construct()
    {
        parent::__construct();
        $this->seen() ; 
        setcookie("id", $this->get(), time()+3600);
    }
    public function savee()
    {

        if (isset($_POST['submmit'])) {
            $text =  $_POST['myTextarea'];
            $titel =  $_POST['qwasd'];
            $this->update('post', $this->get(), 3 , $this->xss($text, FILTER_SANITIZE_SPECIAL_CHARS), $this->xss($titel, FILTER_SANITIZE_SPECIAL_CHARS) ,($this->qqw(0,'edit'))+1 );
            $this->conn = null;

            header('location:../mosharekat/');
            exit;
        }
    }
    public function qw($r, $r2)
    {

        $p[] =  $this->selekt(5, $this->get());


        print_r($p[0][$r][$r2]);
         
    }
    public function qqw($r, $r2)
    {

        $p[] =  $this->selekt(5, $this->get());

        return $p[0][$r][$r2] ; 
    }
    public function user($r2)
    {
       $y[]= $this->selekt(3,$r2) ;
    
       echo  $y[0]['user'] ; 
    }
    public function get()
    {

        return  $_GET['id'];
    }
    public function seen()
    {
    
        $t[] =  $this->selekt();
        $i = $t[0][0]['seen'] ; 
        $this->update('post', $this->get(),2,$i+1 )  ;
    
    }
}

