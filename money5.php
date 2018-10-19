
<?php
// cd c:/OSPanel/domains/netology/php1.3


var_dump($argv);
$res = array_slice($argv, 1);
$result = implode(',', $res);
echo $result;
echo PHP_EOL;

$arr[] = $res;
var_dump($arr);

$fp = fopen('file.csv', 'a+');

foreach ($arr as $key => $fields) {
	fputcsv($fp, $fields);
}

fclose($fp);

if ($argv[1] === "--today") {
	//if (file_exists('file.csv')) {
 //   echo "Файл file.csv существует";
   $sum = 0;
   $handle = fopen("./file.csv", "r");
	if ($handle !== FALSE) {
	$data = fgetcsv($handle, 1000, ",");
	var_dump($data);
   while ($data !== FALSE) {
        //$num = count($data);
   	if (is_numeric($data[0])) {
   		echo   $data[0] ."\n";
        $sum += $data[0];
        echo   $sum ."\n";
       // for ($c=0; $c < $num; $c++) {
           // echo "{$data[$c][0]}" . "<br />\n";
       // }
       
   	} $data = fgetcsv($handle, 1000, ",");
        
    }
    fclose($handle);
}
//} else {
   // echo "Файл file.csv не существует";
}



?>