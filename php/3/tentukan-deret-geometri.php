<?php
function tentukan_deret_geometri($arr) {
// kode di sini
    $n = $arr;
    $panjang = count($arr);
    $kali = $n[1]/$n[0];
    $stat = "";
    for ($i=$panjang-1; $i>0; $i--){
        if ($n[$i] == $n[$i-1]*$kali){
            $stat = "True <br>";
           
        } else {
            $stat = "False <br>";
        break;
        }
    }
    return $stat;
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>