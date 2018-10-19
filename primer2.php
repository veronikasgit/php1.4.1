<?php

$f = fopen("file.csv", "rt")  or die("Ошибка!");
  
   for ($i=0; $data = fgetcsv($f,1000,","); $i++) {
       // $num = count($data);
       // echo "<h3>Строка номер $i (полей: $num)</h3>";

	  //  for ($c=0; $c<$num; $c++) {
	    //	echo  $data[1];
	    //}
   	echo $data[1]. '<br>';

    }

    fclose($f);

    ?>

