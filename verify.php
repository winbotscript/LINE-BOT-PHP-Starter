<?php
$access_token = 'w3MEPezo0hBLa3NIOqJFpjzhnIRSWXejo3HT+i0tIS8UopT0Chbbf20u3hDKtPpt2JJulXhYBJ2V2UuM38vUjNFzQFJ94DhHFBJuIbZwbeIPp9DTrfyq8fS4zw7R2IDY3nXIwSTFUg3BF+hNMxap2gdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
