<?php

$request->setRequestUrl('https://fakestoreapi.com/products');
$request->setRequestMethod('GET');
$request->setOptions(array());

$client->enqueue($request)->send();
$response = $client->getResponse();
echo $response->getBody();
