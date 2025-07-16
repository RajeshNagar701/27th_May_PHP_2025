<?php
$arr=array("name"=>"KEYUR","email"=>"raj@gmail.com","mobile"=>"124567891"); // saprate key and value 1 to make it 2 array


print_r($arr);

echo "<br>";


$key=array_keys($arr);

foreach($key as $k)
{
	echo $k."<br>";
}

$values=array_values($arr);

foreach($values as $v)
{
	echo $v."<br>";
}




?>