<?php

$data = [
	["1", "alex", "alex@xfvg.me"],
	["2", "kulagin", "join@mkaf.com"]
];

$res = fopen("./contacts.csv", "w");
for($i=0;$i<count($data);$i++) {
	$item = $data[$i];
	fwrite($res, implode(";", $item)."\n");
}

fclose($res);
print_r(file_get_contents("./contacts.csv"))
?>