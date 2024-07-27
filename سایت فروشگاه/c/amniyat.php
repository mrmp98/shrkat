<?php 
 class qw
 {
    function xss($user, $password, $phon = null, $tavalod = null){
        $filtered_user = htmlspecialchars(filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING));
        $filtered_password = htmlspecialchars(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
        $filtered_phon = htmlspecialchars(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
        $filtered_tavalod = htmlspecialchars(filter_input(INPUT_POST, 'daye', FILTER_SANITIZE_STRING));
        return array($filtered_user, $filtered_password, $filtered_phon, $filtered_tavalod);
    }
    public function dom (){}
    public function dos (){}
    public function brotfors (){}
    public function csrf (){}
    public function Insecure_File_Uploads (){}
    public function HTTP_Parameter_Pollution (){}
    public function rams_gozari (){}
 }
  $e = new qw 
   $e->xss() ;