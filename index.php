<?php
ini_set("soap.wsdl_cache_enabled", "0");

require_once __DIR__ . "/vendor/autoload.php";

$class = "Bookcatalog\BookService";

$wsdl = "money_con.wsdl";

// initialize SOAP Server
$server=new SoapServer($wsdl,[	
    'uri'=>"http://localhost/Server/server.php"
]);

$server->setClass($class);

// start handling requests
$server->handle();
