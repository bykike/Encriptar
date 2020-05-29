<?php
include "mcript.php";

// Como usar las funciones para encriptar y desencriptar.
$dato = "Esta es información importante";

//Encripta información:
$dato_encriptado = $encriptar($dato);

//Desencripta información:
$dato_desencriptado = $desencriptar($dato_encriptado);

echo "Entrada de dato: ". $dato . '<br>';
echo 'Dato encriptado: '. $dato_encriptado . '<br>';
echo 'Dato desencriptado: '. $dato_desencriptado . '<br>';

echo "IV generado: " . $getIV();




// To encrypt a string

$dataToEncrypt = 'Hello World';

$cypherMethod = 'AES-256-CBC';
$key = random_bytes(32);
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cypherMethod));

$encryptedData = openssl_encrypt($dataToEncrypt, $cypherMethod, $key, $options=0, $iv);

echo '<br>' . "Entrada de dato: " . $dataToEncrypt  . '<br>';

echo 'Dato encriptado: '. $encryptedData . '<br>';
// To decrypt an encrypted string

$decryptedData = openssl_decrypt($encryptedData, $cypherMethod, $key, $options=0, $iv);

echo 'Dato desencriptado: '. $decryptedData . '<br>';


?>
