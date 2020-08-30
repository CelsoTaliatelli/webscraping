<?php
 
 use Symfony\Component\BrowserKit\HttpBrowser;
 use Symfony\Component\HttpClient\HttpClient;

 require_once 'vendor/autoload.php';

 $browser = new HttpBrowser(HttpClient::create());

 $browser->setServerParameter('HTTP_USER_AGENT','Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0');

 $browser->request('GET','https://vitormattos.github.io/poc-lineageos-cellphone-list-statics//');
print_r($browser->getRequest());