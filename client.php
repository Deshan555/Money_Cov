<?php

class data_info
{
    public $source_currency;

    public $amount;

    public $target_currency;
}

class Client{

    public $instance = NULL;


    public function __construct()
    {
        $params = array(
            'location'=>'http://localhost/Server/index.php?wsdl',
            'uri' =>  'urn://localhost/Server/index.php?wsdl'  ,
            'trace'=>1,'cache_wsdl'=>WSDL_CACHE_NONE    );
        $this->instance =  new SoapClient(NULL, $params);
    }

    public function money_conv($data_array)
    {
        return $this->instance->__soapCall('Convert_Money', [$data_array]);
    }
}

$client = new Client;

$data_array = new data_info();

$data_array->source_currency = 'LKR';

$data_array->amount = 1000;

$data_array->target_currency = 'USD';

try
{
    echo "Money Conversion : \t: " , $client->money_conv($data_array),"\n";

    echo "Done\n";
}
catch (Exception $e)
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>
