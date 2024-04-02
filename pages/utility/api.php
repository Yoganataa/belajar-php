<?php
$url = 'https://fakestoreapi.com/products';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

$products = json_decode($response, true);
return $products;
?>
