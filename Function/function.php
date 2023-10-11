<?php
function tampil_ganjil(){
    for ($i = 1; $i <= 10; $i++){
        if ($i % 2 == 1){
            echo "$i ";
        }
    }
}

//peamggil fungsi
echo "Bilangan ganjil dari 1-10 : </br>";
tampil_ganjil();

?>