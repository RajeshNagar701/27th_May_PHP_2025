<?php

// useful in reduce reusable code and remove inheritance multiple
trait abc
{
	function test()
	{
	echo "This is test method <br>";
	}
}
trait xyz
{
	function sample()
	{
		echo "this is sample method <br>";
	}
}
class pqr  
{
	use abc,xyz;  // multiple inherit 
}
$obj=new pqr();
$obj->test();
$obj->sample();

?>