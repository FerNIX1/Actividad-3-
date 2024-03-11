<?php
$array=array(
    "1"=> 1,
    "2"=> 2,
    "3"=> 3,
) ;
//antes de invertir 
echo "antes de invetir".'<br>';
echo '<pre>';
echo print_r( $array );
echo '</pre>';
echo '<br>';
echo 'Despues de invertir'.'<br>';
$preserved = array_reverse($array, true);
echo '<pre>';
echo print_r($preserved);
echo '</pre>';
?>