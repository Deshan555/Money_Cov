<?php

namespace Bookcatalog;

class BookService
{  
  /**
   * @soap
   * @param Bookcatalog\Transfer $data_array
   * @return int
   */
  public function Convert_Money($data_array)
  {
      $source_currency_base = $this->get_Data($data_array->source_currency);

      $target_currency_base = $this->get_Data($data_array->target_currency);

      $amount = $data_array->amount;

      $calculation = ($amount/$source_currency_base)*$target_currency_base;

      return $calculation;
  }

    /**
   * @soap
   * @param Bookcatalog\Transfer $data_array
   * @return string
   */
  public function ex($data_array)
  {
      $source_currency_base = $this->get_Data($data_array->source_currency);

      $target_currency_base = $this->get_Data($data_array->target_currency);

      $amount = $data_array->amount;

      $calculation = ($amount/$source_currency_base)*$target_currency_base;

        return $calculation;
  }

  

  
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

}

