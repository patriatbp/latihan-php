<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
         $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
         $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
         var_dump($kids);
         echo "<br>";
         var_dump($adults);
         echo "<br>";
         echo $adults[4];
         echo "<hr>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
      echo "<h3> Soal 2 </h3>";
        echo "<br>";
        echo "Jumlah Anak = ".count($kids)."<br>";
        foreach ($kids as $kd) {
 			
        	echo $kd."<br>";
        }       
        echo "<br>";
        echo "Jumlah Orang Dewasa = ".count($adults)."<br>";
         foreach ($adults as $ad) {
        	echo "<br>".$ad;
        }
        echo "<hr>";
        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
         $data = [
         		 ["Name"=>"Will Byers",
     			  "Age"=>"12",
     			  "Aliases"=>"Will the Wise",
     			  "Status"=>"Alive"],
     			  ["Name"=>"Mike Wheeler",
     			  "Age"=>"12",
     			  "Aliases"=>"Dungeon Master",
     			  "Status"=>"Alive"],
     			  ["Name"=>"Jim Hopper",
     			  "Age"=>"43",
     			  "Aliases"=>"Chief Hopper",
     			  "Status"=>"Desceased"], 
     			  ["Name"=>"Eleven",
     			  "Age"=>"12",
     			  "Aliases"=>"El",
     			  "Status"=>"Alive"]
     			];
     			echo "<br>";
     	echo "<h3> Soal 3 </h3>";

     	foreach ($data as $a) : 
     		echo "Name : ".$a["Name"]."<br>";
     		echo "Age : ".$a["Age"]."<br>";
     		echo "Aliases : ".$a["Aliases"]."<br>";
     		echo "Status : ".$a["Status"]."<br>";
     		echo "<hr>";
	     		// echo "Name : "
	     		// echo $a["Name"];
	     		// echo "<br>";
	     		// echo "Age : ";
	     		// echo $a["Age"];
	     		// echo "<br>";
	     		// echo "Aliases : ";
	     		// echo $a["Aliases"];
	     		// echo "<br>";
	     		// echo "Status : ";
	     		// echo $a["Status"];
	     		// echo "<hr>";
     	endforeach;

?>
</body>
</html>