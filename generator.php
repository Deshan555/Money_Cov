<?php
require_once __DIR__ . "/vendor/autoload.php";

$class = "Bookcatalog\BookService";

$serviceURI = "http://localhost/Server/index.php";

$wsdlGenerator = new PHP2WSDL\PHPClass2WSDL($class, $serviceURI);

$wsdlGenerator->generateWSDL(true);
// Dump as string
$wsdlXML = $wsdlGenerator->dump();
// Or save as file
$wsdlXML = $wsdlGenerator->save('money_con.wsdl');
