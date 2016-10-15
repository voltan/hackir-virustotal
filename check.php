<?php

$fields = array(
    'resource' => '0f6e656f0a31c486375f83d37152442f9c5a612913540cd1c089f6e22065d719-1475663472',
    'apikey' => '19f2ab7ca76132a33559efbcca6c20d170520e4685ccd27e624a5a1f7dd596d2',
);

$url = 'https://www.virustotal.com/vtapi/v2/file/report';
//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

print_r($result);