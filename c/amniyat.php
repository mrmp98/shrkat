<?php 
 
 
 trait  amniyat 
 {

    function xss($r , $noesh)
    {
       
     return   htmlspecialchars(filter_var($r, $noesh));
    }
    public function rams_gozari ($data)
    {
        $method = 'aes-256-gcm';
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
        $tag = null;
        $encrypted = openssl_encrypt($data, $method, 'kvwremveroijverajievmevfvfejoiefafa', 0, $iv, $tag);
        return base64_encode($iv . $tag . $encrypted);
    }
    
    public function ramz_goshaee (string $data)
    {
        $method = 'aes-256-gcm';
        $data = base64_decode($data);
        $ivLength = openssl_cipher_iv_length($method);
        $iv = substr($data, 0, $ivLength);
        $tag = substr($data, $ivLength, 16);
        $encrypted = substr($data, $ivLength + 16);
        return openssl_decrypt($encrypted, $method, 'kvwremveroijverajievmevfvfejoiefafa', 0, $iv, $tag);
    }
}


