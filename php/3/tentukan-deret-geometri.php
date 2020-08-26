<?php
function tentukan_deret_geometri($arr) {
// kode di sini
    $n = $arr;
    $panjang = count($arr);
    $kali1 = $n[$panjang-1]/$n[$panjang-2];
    $kali2 = $n[1]/$n[0];
    if ($kali1 == $kali2){
        echo "Deret Geometri : True <br>";
       
    } else {
        echo "Deret Geometri : False <br>";
    }
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>