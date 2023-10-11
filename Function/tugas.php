<?php

function ganjil($counter){
    for($i = 10; $i < 123456; $i++){
        if($i % 2 == 1){
            $counter++;
        }
    }
    return $counter;
}

$counter_ganjil = 1;

$total = ganjil($counter_ganjil);
echo "Jumlah bilangan ganjil dari 10 - 123456</br>";
echo "Hasil jumlah ganjil : $total total";

?>