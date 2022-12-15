<?php

class data_info
{
    public $source_currency;

    public $amount;

    public $target_currency;
}

class Client
{

    public $instance = NULL;


    public function __construct()
    {
        $params = array(
            'location' => 'http://localhost/Server/index.php?wsdl',
            'uri' => 'urn://localhost/Server/index.php?wsdl',
            'trace' => 1, 'cache_wsdl' => WSDL_CACHE_NONE);
        $this->instance = new SoapClient(NULL, $params);
    }

    public function money_conv($data_array)
    {
        return $this->instance->__soapCall('Convert_Money', [$data_array]);
    }
}

if(isset($_POST['submit']))
{
    $target_money = $_POST['target_currency'];

    $source_money = $_POST['source_currency'];

    $amount = $_POST['amount_money'];

    echo $target_money;

    echo $source_money;

    echo $amount;

    $client = new Client;

    $data_array = new data_info();

    $data_array->source_currency = $source_money;

    $data_array->amount = $amount;

    $data_array->target_currency = $target_money;

    try {
        //echo "Money Conversion : \t: ", $client->money_conv($data_array), "\n";

        $operation = $client->money_conv($data_array);

        header('location: index.php?message='.$amount .' '.$source_money.' equals '.$operation.' '.$target_money);

    }
    catch (Exception $e)
    {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}
else
{


}






