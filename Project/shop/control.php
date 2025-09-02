<?php

include_once('../admin/model.php'); // 1 model load

 class control extends model { // 2 model extends for function call
	 
	 function __construct(){
		
		model::__construct(); // 3 call model __construct for db connection
		
		$url=$_SERVER['PATH_INFO']; // http://localhost/students/27th_May_PHP_2025/Project/admin/control.php
		
		switch($url)
		{
			case '/':	
				include('index.php');
			break;
			case '/index':	
				include('index.php');
			break;
			case '/about':	
				include('about.php');
			break;
			case '/products':	
				include('products.php');
			break;
			case '/contact':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$comment=$_REQUEST['comment'];
					
					$arr=array("name"=>$name,"email"=>$email,"comment"=>$comment);
					$res=$this->insert('contact',$arr);
					if($res)
					{
						echo "<script>
							alert('contact Added Success');
							window.location='contact';
						</script>";
					}
				}
				include('contact.php');
			break;
			case '/login':	
				include('login.php');
			break;
			case '/single-product':	
				include('single-product.php');
			break;
		}
			
	 }
 }

$obj=new control;

?>