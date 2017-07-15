<?php
$access_token = 'ifNEIb0T0fu00LwBVddqYSarOl/O+5v8LEhd9BbPNtBBT0mqK6hYGI5SgV4IYxAyN3CAOpcCNaTsf5q+jT9eLNiEa9vgsmPuEUF60+KL41WJ09ck4ZYVu8BfOJVexyb5/qvfajyXkHI2yF3D1QL7hgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
