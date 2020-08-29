<?php

    use Symfony\Component\HttpClient\HttpClient;

    require_once 'vendor/autoload.php';

    $client = HttpClient::create();

    $request = $client->request('GET','http://www.bairral.com.br');

    $status = $request->getStatusCode();
    var_dump($status);