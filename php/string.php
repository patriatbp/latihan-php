<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 
            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */
         $string = "PHP is never old";
         echo "Panjang string : ".strlen($string);
         echo "<br>";
         echo "Jumlah kata : ".str_word_count($string);
		echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
            $string2 = "I Love PHP";
            echo "String = ".$string2."<br>";
            echo "Kata Pertama ".substr($string2,0,2)."<br>";
            echo "Kata Kedua ".substr($string2,1,5)."<br>";
            echo "Kata Ketiga ".substr($string2,7)."<br>";


            echo "<h3> Soal No 3</h3>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
           $string3 = "PHP is old but sexy!";
           // OUTPUT : "PHP is old but awesome"
           echo str_replace("sexy", "awesome", $string3);
    ?>
</body>
</html>