<?php
$array = array(
    "0" => 2,
    "1" => 2,
    "2" => 2,
    "3" => 2,
);

echo "El array sin sumar";
echo "<pre>";
print_r($array);
echo "</pre>";

echo "Array después de sumar";
$arraySumado = 0;

foreach ($array as $val) {
    if ($val % 2 == 0) {
        $arraySumado += $val;
    } else {
        throw new Exception("No se puede sumar un valor que no es par");
    }
}

echo "<pre>";
echo $arraySumado;
echo "</pre>";
?>
  

?>