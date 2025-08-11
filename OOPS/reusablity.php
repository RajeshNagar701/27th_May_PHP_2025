
<?php
/*

Inheritance / Reusability 

It is a concept of accessing the features of one class from another class.
types

1)Single-level inheritance.
2)Multi-level inheritance.

3)Multiple inheritance.   not work in PHP

4)Hierarchical Inheritance.

5)Hybrid Inheritance.



*/
// single level inheritance
class abc
{
	public $a=10;
	public $b=20;
	function sum()
	{
		echo $sum=$this->a+$this->b."<br>";
	}
}
class xyz extends abc
{
	function multi()
	{
		echo $this->a*$this->b;
	}
}
$obj=new xyz;
$obj->sum();
$obj->multi();

$obj->a;

/*
1) single level

class a
{
	
}
class b extend a
{
	
}

obj: b
=================================

2) Multi-level 

class a
{
	
}
class b extend a
{
	
}
class c extends b
{
	
}

obj: c

=================================

3) Multiple inheritance.  Not possible in PHP

class a
{
	
}

class b 
{
	
}
class c extends a,b     // class c: a,b
{
	
}

obj: c // but Multiple Inhetitance not possible in php by extend / only one class extend

==============================================================

4)Hierarchical Inheritance.


class a
{
	
}
class b extends a
{
	
}
class c extends a  
{
	
}

obj : b and c
==================================================================

==============================================================
5)Hybrid Inheritance.


Mix of any two 


class a
{
	
}
class b extend a
{
	
}
class c extends b
{
	
}
class d extends a
{
	
}




*/




