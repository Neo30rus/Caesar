<?php
function SecurePassword ($string, $shift) {
    $length = mb_strlen($string);
    $shifted = 'Ваш пароль: ';
    for ($i = 0; $i < $length; ++$i)
        $shifted.= chr(ord($string[$i]) +$shift);
    return $shifted;
}
echo SecurePassword('mypassword',5)
?>