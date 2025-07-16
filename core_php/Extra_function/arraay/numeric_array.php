<?php

/*
// array is collection values


$a="raj";
$b="akash";
$c="mahesh";

$names=array("Raj","akash","mahesh");   // array("0"=>"Raj","1"=>"akash","2"=>"Mahesh");




collections of values

$nemeric=array("a","b","c");  index auto generate 0

$associatearray("5"=>"a","7"=>"b","8"=>"c");  // associate

$multidemetional=array("a","b"=>array("p","q"),"c");  // multidemetional

*/

$name="a";
$name1="b";
$name2="c";

$arr=array("a","b","c","d","e","f","g"); // 0=>a

print_r($arr);// print_r() buildin fun for print array

echo $arr[4];  // e
echo $arr[5];  // f

foreach($arr as $str)
{
	echo "<p>".$str."</p>";
}


for($i=0;$i<count($arr);$i++)
{
	echo $arr[$i] ."<br>";
}

?>