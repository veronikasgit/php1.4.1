
<?php
// cd c:/OSPanel/domains/netology/php1.3



$res = array_slice($argv, 1);
$result = implode(',', $res);


$arr[] = $res;


$fp = fopen('file.csv', 'a+');

foreach ($arr as $key => $fields) {
	fputcsv($fp, $fields);
}

fclose($fp);

if ($argv[1] === "--today") {
	//if (file_exists('file.csv')) {
 //   echo "Файл file.csv существует";
   $sum = 0;
   $handle = fopen("./file.csv", "r")  or die("Ошибка!");

	
  $data = fgetcsv($handle, 1000, ",");
  for ($i=0; $data; $i++) {
    $num = count($data);
    echo "Строка номер $i (Полей: $num)";

    for ($c=0; $c<num; $c++) {
      echo "[$c]: $data[$c]<br>";
    }
    fclose($fp);
  }

}
exit;

  if ($handle !== FALSE) {
	$data = fgetcsv($handle, 1000, ",");

   while ($data !== FALSE) {
        //$num = count($data);

        $sum += $data[1];
     echo   $sum ."\n";
       // for ($c=0; $c < $num; $c++) {
           // echo "{$data[$c][0]}" . "<br />\n";
       // }
       
   	} //$data = fgetcsv($handle, 1000, ",");
        
    }
    fclose($handle);
}
//} else {
   // echo "Файл file.csv не существует";




?>