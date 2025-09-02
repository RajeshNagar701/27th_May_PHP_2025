<?php

include_once('model.php'); // 1 model load

 class control extends model { // 2 model extends for function call
	 
	 function __construct(){
		
		model::__construct(); // 3 call model __construct for db connection
		
		$url=$_SERVER['PATH_INFO']; // http://localhost/students/27th_May_PHP_2025/Project/admin/control.php
		
		switch($url)
		{
			case '/admin-login':	
				include('login.php');
			break;
			case '/dashboard':	
				include('dashboard.php');
			break;
			
			case '/add_categories':	
				if(isset($_REQUEST['submit']))
				{
					$cate_name=$_REQUEST['cate_name'];
					$cate_image=$_FILES['cate_image']['name'];
					
					if($_FILES['cate_image']['size']>0)
					{
						$path='assets/images/categories/'.$cate_image;  // path set
						$dup_file=$_FILES['cate_image']['tmp_name']; // get duplicate file
						move_uploaded_file($dup_file,$path);
					}
					
					$arr=array("cate_name"=>$cate_name,"cate_image"=>$cate_image);
					$res=$this->insert('categories',$arr);
					if($res)
					{
						echo "<script>
							alert('Categories Added Success');
							window.location='add_categories';
						</script>";
					}
				}
				include('add_categories.php');
			break;
			case '/manage_categories':
				$cate_arr=$this->select('categories');
				include('manage_categories.php');
			break;
			case '/add_product':	
				include('add_product.php');
			break;
			case '/manage_product':	
				$prod_arr=$this->select('products');
				include('manage_product.php');
			break;
			
			case '/manage_customer':
				$cust_arr=$this->select('customer');
				include('manage_customer.php');
			break;
			case '/manage_contact':	
				$cont_arr=$this->select('contact');
				include('manage_contact.php');
			break;
			case '/manage_cart':	
				include('manage_cart.php');
			break;
			case '/manage_order':	
				include('manage_order.php');
			break;
			case '/manage_feedback':	
				include('manage_feedback.php');
			break;
		}
			
	 }
 }

$obj=new control;

?>