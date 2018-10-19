<?php

$f = fopen("file.csv", "rt")  or die("Ошибка!");
    $sum = [];
   for ($i=0; $data = fgetcsv($f,1000,","); $i++) {
       // $num = count($data);
       // echo "<h3>Строка номер $i (полей: $num)</h3>";

	  //  for ($c=0; $c<$num; $c++) {
	    $price[] = $data[1];

     
	    //}
     // $sum = $data[1]
    
      // $sum += $data[1];
    }
    echo '<pre>';
print_r($price)   ;
   	//echo $sum. '<br>';
$sum = array_sum($price);
      echo $sum;

    fclose($f);

    ?>

