<?php

class encrypt_class
{
private $pass = 'Mrutunjay Pani1991@gmailcom';
 
function mrutunjay_enc($data) {
   $encryption_key = base64_decode($this->pass);
   $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
   $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
   return base64_encode($encrypted . '::' . $iv);
}

function mrutunjay_dec($data) {
   $encryption_key = base64_decode($this->pass);
   list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
   return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}
}
?>
