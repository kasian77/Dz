<?php
$arr = [
	"Dan" => "1978",
	"John" => "2002",
	"Ryan" => "1930"
];
ksort($arr);
print_r($arr);
asort($arr);
print_r($arr);
sort($arr);
print_r($arr);
