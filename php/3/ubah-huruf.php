<?php
function ubah_huruf($string){
//kode di sini
    $abjad = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $long = strlen($string);
    $pa = count($abjad);
    $str = "";
    
    for ($i = 0; $i<=$long-1; $i++) {
        for ($j=0; $j<=$pa-1; $j++){
            if ($string[$i] == $abjad[$j]){
                $str .= $abjad[$j+1];
            }   
        }
    }    
   // echo "<br>";
    return $str."<br>";
    
    
}
    


// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>