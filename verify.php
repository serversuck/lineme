<?php
$access_token = 'DnkJV7DuTpajvt+bbha+hBzZOcVT3TGYrZY8qfwOCgBfkN4t+u5Y4h31CfC9MBVs2tA+nHn23CrizHiTHZsA+rjXKfVQ/CjzOnwzfJBM2yYpTa+CmrQP53tEEZmEMwrHPxzlaslZ+GABub8tE+EhUgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
