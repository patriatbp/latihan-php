<?php

function cari_mean($arr){
//kode di sini
    $jumlah_data = count($arr);
    $hasil = array_sum($arr);
    $rata2= round($hasil/$jumlah_data);

    
    return $rata2;
}

// TEST CASE 
echo cari_mean([1, 2, 3, 4, 5])."<br>"; // 3
echo cari_mean([3, 5, 7, 5, 3])."<br>"; // 5
echo cari_mean([6, 5, 4, 7, 3])."<br>"; // 5
echo cari_mean([1, 3, 3])."<br>"; // 2
echo cari_mean([7, 7, 7, 7, 7])."<br>"; // 7

?>