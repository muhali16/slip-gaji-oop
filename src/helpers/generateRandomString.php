<?php
function generateRandomString($max)
{
    $string = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
    $stringLen = strlen($string);
    $randomStr = '';
    for ($i = 1; $i<=$max; $i++)
    {
        $randomStr .= $string[rand(0, $stringLen-1)];
    }

    return $randomStr;
}