<?php

function caesarEncrypt($string, $shift) {
    $result = "";
    $string = preg_replace("[^a-zA-Z0-9]", "", $string);
    $string = mb_strtolower($string);
    $length = mb_strlen($string, 'UTF-8');
    for($i = 0; $i < $length; $i++) {
        $char = mb_substr($string, $i, 1, 'UTF-8');
        if (is_numeric($char)) {
            $result .= ($char + $shift) % 10;
        } else { // иначе
            $code = ord($char) + $shift;
            if ($code > 122) {
                $code -= 26;
            }
            $result .= chr($code);
        }
    }
    return $result;
}
echo caesarEncrypt("helloworld1",2);



function caesarDecrypt($string, $shift) {
  $result = "";
  $string = preg_replace("[^a-zA-Z0-9]", "", $string);
  $string = mb_strtolower($string);
  $length = mb_strlen($string, 'UTF-8');
  for($i = 0; $i < $length; $i++) {
    $char = mb_substr($string, $i, 1, 'UTF-8');
    if (is_numeric($char)) {
      $result .= ($char - $shift + 10) % 10;
    } else { // иначе
      $code = ord($char) - $shift;
      if ($code < 100) {
        $code += 25;
      }
      $result .= chr($code);
    }
  }
  return $result;
}
echo " = ";
echo caesarDecrypt('Jjgnnqyqtnf3',2)."<br>";