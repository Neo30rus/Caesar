<?php

$str = "1010101";
$key = "11111";
$crypto = "";


function encrypt ($str,$key, $crypto) {
    $str = str_pad($str, 8,0, STR_PAD_LEFT);
    $key = str_pad($key, 8,0, STR_PAD_LEFT);

    for ($i = 7; $i >=0; $i -- )
    {
        if($str[$i] xor $key[$i]) {
            $crypto .= "1";
        } else {
            $crypto .= "0";
        }
    }
    var_dump($str);
    var_dump($key);
    var_dump($crypto);
}
encrypt("1010101","11111","");

function decrypt ($str,$key)
{
    $str = str_pad($str, 8,0, STR_PAD_LEFT);
    $key = str_pad($key, 8,0, STR_PAD_LEFT);
    $crypto = "";
    for ($i = 7; $i >=0; $i -- )
    {
        if($str[$i] xor $key[$i]) {
            $crypto = "1" . $crypto;
        } else {
            $crypto = "0" . $crypto;
        }

    }
    return( $crypto);

}
echo decrypt("01001010","11111");

?>
