<?php
function pasangan_terbesar($angka){
// kode di sini
    $arr = str_split($angka);
    // $hasil = [];
    // for($i=0; $i<strlen($angka)-1; $i++){
    //     $hasil = $arr[$i].$arr[$i+=1];

    // }

    // $terbesar_sementara = $hasil;
    // for ($j=0; $j<strlen($hasil); $j++){
    //     if($hasil[$j] > $terbesar_sementara){
    //         $terbesar_sementara = $hasil[$j];
    //     }
    // }
    // return $terbesar_sementara;

    $panjang = strlen($angka);
    $max = $arr[0].$arr[1];
    $hasil = "";
    for ($i = 1; $i < $panjang-1; $i++){
       $hasil =  $arr[$i].$arr[$i+1];
        if ($max < $hasil){
            $max =  $hasil;
        }
    }
    return $max;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>";
echo pasangan_terbesar(12783456); // 83
echo "<br>";
echo pasangan_terbesar(910233); // 91
echo "<br>";
echo pasangan_terbesar(71856421); // 85
echo "<br>";
echo pasangan_terbesar(79918293); // 99

?>