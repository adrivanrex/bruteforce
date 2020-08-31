<?php
/**
* Brute By rex Adrivan
*
**/

/** FIRST ATTEMPT Brute force all small letters **/

function id_encode($id, $chars) {
    $len = strlen($chars);
    $i = 1;
    $str = array();
    while ($id >= 0) {
        $str[] = $chars[ $id / pow($len, $i - 1) % $len ];
        $id -= pow($len, $i);
        $i++;
    }
    return strrev(implode('', $str));
}

$chars = 'abcdefghijklmnopqrstuvwxyz';

$id = 10;

$string = id_encode($id, $chars);
echo 'id:          ' . $id . PHP_EOL;
echo 'letter: ' . $string . PHP_EOL;

?>
