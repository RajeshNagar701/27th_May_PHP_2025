<?php


// check value of variable is set or not

$p;
echo $p;
if(isset($p))
{
	
}	
else
{
	echo "Not set";
}

//================================================

if(isset($_REQUEST['submit']))
{
	echo "<h1>submit work</h1>";
}	

// submit button pe vale he ke nahi 


?>


<form>
	
	<input type="submit" value="Signup" name="submit">
	
</form>


