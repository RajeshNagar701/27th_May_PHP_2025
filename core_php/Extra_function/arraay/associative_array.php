<?php
$asociate_arr=array("raj"=>"a","2"=>"b","3"=>"c");

print_r($asociate_arr);
echo "<br>";


echo $asociate_arr['raj']. "<br>";


foreach($asociate_arr as $string)
{
	echo $string ."<br>";
}

// we fetch database data & store in array
$customers=array(["id"=>1,"name"=>"raj nagar","email"=>"raj@gmail.com","pass"=>"abc");

echo $customers["name"];

foreach($customers as $string)
{
	echo $string ."<br>";
}
?>