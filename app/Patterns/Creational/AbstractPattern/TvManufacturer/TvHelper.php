<?php  namespace App\Patterns\Creational\AbstractPattern\TvManufacturer;

trait TvHelper
{
    /**
    * convert a studly string to an array
    *
    * @param string $text
    * @return array
    */
    public function splitStudlyCaseToArr(string $text): array
    {
        $arr = [];
        $word = '';
        for($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if($i !== 0 && ord($char) < 97) {
                $arr[] = $word;
                $word = '';
            } else if($i === (strlen($text) - 1)) {
                $arr[] = $word . $char;
            }
            $word .= $char;
        }
        return $arr;
    }
    /**
    * get the class name where it is called
    *
    * @param void
    * @return void
    */
    public function getCalledClassName()
    {
        $reflection = new \ReflectionClass(get_called_class());
        return $reflection->getShortName();
    }
}