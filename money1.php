
<?php
// cd c:/OSPanel/domains/netology/php1.3


//var_dump($argv);
$descript = array_slice($argv, 2);
$description = implode(' ', $descript);
$d = date('Y-m-d');

/*echo $description;
echo PHP_EOL;
echo $d;*/

$row = [];
$row[0] = $d;
$row[1] = $argv[1];
$row[2] = $description;

echo PHP_EOL;
echo '$row';
echo PHP_EOL;
print_r($row);

$arr[] = $row;
echo PHP_EOL;
echo '$arr';
echo PHP_EOL;
var_dump($arr);
