<?php
 require_once __DIR__ . '/../../m/amal_ha.PHP';

class qw extends amal_ha 
{
    public function __construct()
    {
        parent::__construct();
         
    }
    
} 
$r = new qw() ; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // دریافت داده‌ها
    $r->dell('post', $_POST['id']) ; 
    
    
} else {
    echo "داده‌ها به درستی ارسال نشدند.";
}


$r->conn = null ;