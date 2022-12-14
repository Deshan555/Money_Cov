<?php

function get_Data($data)
{
    $data_json = file_get_contents('data.json');

    $decoded_json = json_decode($data_json, true);

    $currency_data = $decoded_json['money'];

    foreach($currency_data as $currency_val)
    {
        $name = $currency_val['target_currency'];

        $value = $currency_val['value'];

        if($name == $data)
        {
            //echo ($value);

            return $value;
        }
    }
}
