<html>
<head>
</head>
<body>

<?php
/*

Loop in php :4 type 

while / do while / for              /      array loop  foreach() used for arr var only
  
while(cond)    
{
	
}


do{
	
}while(cond) 

for(ini;cond;$i++)
{
	
}
	
foreach()
{
	
}
*/

// While()

/*
$i=50;

while($i<=100){
	echo $i . ": Rajesh <br>" ;
	$i++;  // value + 1
}
*/

//for
/*
for($i=50;$i<=100;$i++)
{
	echo $i."<br>";
}
*/


//do while
/*
$i=1;
do{
	echo $i . " : Rajesh <br>";
	$i++;
}while($i>=100);
*/



// conrol loop by break/continue

// break

/*
for($a=1;$a<=100;$a++)
{
	if($a==51)
	{
		break;
	}	
    echo $a."<br>";		
}
*/

// continue
/*
for($a=1;$a<=10;$a++)
{
	if($a==7 || $a==9)  // || or    && and      ! not
	{
		continue;
	}
    echo $a."<br>";		
}
*/
?>




</body>
</html>