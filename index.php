<?php
$arr= array (
	"one"=>"1",
	"two"=>"2",
	"three"=>"3",
	"four"=>"4",
	"five"=>"5",
	);
print_r ($arr);
echo "<br>";
$array=array_flip($arr);
print_r ($array);
echo "<br>";
$a=array_keys($arr);
print_r ($a);
echo "<br>";
print_r (array_values($arr));
echo "<br>";
$asd=array_count_values($arr);
print_r ($asd);
echo "<br>";
print_r (array_slice($arr,2));
echo "<br>";
print_r (array_splice($arr,2,3));
echo "<br>";
$abb="добавили справа";
print_r (array_push($arr,$abb));
echo "<br>";
print_r (array_pop($arr));
echo "<br>";
$acc="добавили слева";
print_r (array_unshift($arr,$acc));
echo "<br>";
print_r (array_shift($arr));
echo "<br>";

echo "<br>";
$number=-6;
$bou=abs($number);
echo $bou;
echo "<br>";
$val=3.89254;
$foo=round($val);
echo $foo;
echo "<br>";
$numb=9.1;
$fo=ceil($numb);
echo $fo;
echo "<br>";
$numbone=9.1;
$f=floor($numbone);
echo $f;
echo "<br>";
$array= array (
	"one"=>"3",
	"two"=>"5",
	"three"=>"2",
	"four"=>"4",
	"five"=>"1",
	);
print_r(min($array));
echo "<br>";
print_r(max($array));
echo "<br>";
$fok=36;
echo sqrt($fok);
?>