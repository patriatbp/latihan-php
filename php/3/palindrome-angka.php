<?php

function palindrome_angka($angka) {
  // tulis kode di sini
	$nm = $angka;
	if ($nm < 9) {
		echo $nm += 1;
		echo "<br>";
	} else {
		while($nm>8) {
			
			$nm++;
			if ($nm == strrev($nm)){
				echo $nm;
			echo "<br>";
				break;
			}


			// if(strrev($nm) == $nm) {
			// 	break;
			// 	echo $nm;
			}
		}
	}
    

	

// // TEST CASES

echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>