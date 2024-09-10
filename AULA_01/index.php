<?php

//$arr = array('Key1' => 'Wollygrinx', 'D0rflex', 'Mckinnon');
/*
foreach ($arr as $key => $value) {
    echo $key;
    echo '=>';
    echo $value;
    echo '<hr>';
}*/

$arr = array('ninguem', 'd0rflex', 'mckinnon');
    $total = count($arr);
    for ($i=0; $i < $total ; $i++) { 
        echo $arr[$i];
        echo '<hr>';
        echo '<br>';
    }


?>