<?php
$private = openssl_pkey_get_private("d001d01d-private-key.key")
$public = openssl_pkey_get_public("d001d01d-public-key.pub")
$url = 'http://payway.bubileg.cz/api/echo';
$data = array('field1' => 'value', 'field2' => 'value');
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);

$privkey = openssl_get_privatekey($private);


$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
var_dump($result);
