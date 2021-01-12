<?php
//
$cep = "04925000";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

$response = curl_exec($ch); //Executa o cURL

curl_close($ch);

$data = json_decode($response, true);   //Para transformar em array

print_r($data);
print_r(" | LOCALIDADE: " . $data['localidade']);
print_r(" | CEP: " . $data['cep']);
print_r(" | DDD: " . $data['ddd']);

?>

