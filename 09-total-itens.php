<?php
 
 use Symfony\Component\BrowserKit\HttpBrowser;
 use Symfony\Component\HttpClient\HttpClient;

 require_once 'vendor/autoload.php';

 $browser = new HttpBrowser(HttpClient::create());


$crawler = $browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');
$totalPaginas = $crawler->filter('header')->text();
$totalPaginas = preg_replace('/\D/','',$totalPaginas/10);
print_r($totalPaginas);