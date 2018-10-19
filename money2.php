
<?php
// cd c:/OSPanel/domains/netology/php1.3

if ($argv[1] === "--today") {

$sum = 0;
   $handle = fopen("./file.csv", "r");
  if ($handle !== FALSE) {
  $data = fgetcsv($handle, 1000, ",");
 // var_dump($data);

  if ($row[0] === date('Y-m-d')) {
   while ($data !== FALSE) {
        //$num = count($data);
   
      echo   $data[1] ."\n";
        $sum += $data[1];
     
       // for ($c=0; $c < $num; $c++) {
           // echo "{$data[$c][0]}" . "<br />\n";
       // }
      } 
   // $data = fgetcsv($handle, 1000, ",");
      }  
    }
    fclose($handle);

echo "$row[0] расход за день: $sum";

} else {
 
$descript = array_slice($argv, 2);
$description = implode(' ', $descript);
$d = date('Y-m-d');

$row = [];
$row[0] = $d;
$row[1] = $argv[1];
$row[2] = $description;

$arr = [] ;
$arr[] = $row;

//var_dump($arr);

$fp = fopen('file.csv', 'a+');

foreach ($arr as $key => $fields) {
  fputcsv($fp, $fields);
}

echo "Добавлена строка: $row[0], $row[1], $row[2]";

fclose($fp);


}
?>