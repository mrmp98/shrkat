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
    public function rams_gozari ($data){
        $method = 'aes-256-gcm';
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
        $tag = null;
        $encrypted = openssl_encrypt($data, $method, 'kvwremveroijverajievmevfvfejoiefafa', 0, $iv, $tag);
        return base64_encode($iv . $tag . $encrypted);
    }
    
    public function ramz_goshaee (string $data){
        $method = 'aes-256-gcm';
        $data = base64_decode($data);
        $ivLength = openssl_cipher_iv_length($method);
        $iv = substr($data, 0, $ivLength);
        $tag = substr($data, $ivLength, 16);
        $encrypted = substr($data, $ivLength + 16);
        return openssl_decrypt($encrypted, $method, 'kvwremveroijverajievmevfvfejoiefafa', 0, $iv, $tag);
    }
}

$e = new qw();
