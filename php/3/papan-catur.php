<?php

function papan_catur($angka) {
// tulis kode di sini
	// for ($i=1; $i<=$angka; $i++){
	// 	for ($j=1; $j<=$angka; $j++){
	// 		echo "# ";
	// 	}
	// 	echo "<br>";
	// 	}	
	$jum = $angka*2-1;
	echo "<table border=0>";
	for ($row=0; $row<$angka; $row++){
		echo "<tr> \n";
		for ($col=0; $col<$jum; $col++){
			if (($col % 2 ==0 && $row % 2 ==0) || ($col % 2 == 1 && $row % 2 == 1)){
				echo "<td>#</td>";
			} else {
				echo "<td> </td>";
			}
			// if ($col % 2 != 0 && $row % 2 != 0) {
			// 	echo "<td> # </td>";
			// }if($col % 2 !=0 && $row %2 == 0) {
			// echo"<td> * </td>";
			
		
		}
		echo "</tr>";
	}
	echo "</table>";
}

// TEST CASES
echo "Papan Catur 4";
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */
echo "Papan Catur 8";
echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "Papan Catur 5";
echo papan_catur(5);

/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/