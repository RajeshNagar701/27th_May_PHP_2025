<?php

include_once('model.php'); // 1 model load

 class control extends model { // 2 model extends for function call
	 
	 function __construct(){
		
		model::__construct(); // 3 call model __construct for db connection
		
		$url=$_SERVER['PATH_INFO']; // http://localhost/students/27th_May_PHP_2025/Project/admin/control.php
		
		session_start();

		switch($url)
		{
			case '/admin-login':	
				if(isset($_REQUEST['submit']))
				{
					$email=$_REQUEST['email'];
					$password=$_REQUEST['password'];
					$md_password=md5($password);
					
					$where=array("email"=>$email,"password"=>$md_password);
					
					$run=$this->select_where('admin',$where);
					$ans=$run->num_rows; // check row wise condition
					if($ans==1)  // 1 means true
					{

						$fetch=$run->fetch_object();

						$_SESSION['a_id']=$fetch->id;
						$_SESSION['a_name']=$fetch->name;
						$_SESSION['a_email']=$fetch->email;
						echo "<script>
							alert('Login Success');
							window.location='dashboard';
						</script>";
					}
					else
					{
						echo "<script>
							alert('Login Failed due to wrong creadential');
							window.location='admin-login';
						</script>";
					}	
				}
				include('login.php');
			break;

			case '/admin_logout':	
				
				unset($_SESSION['a_id']);
				unset($_SESSION['a_name']);
				unset($_SESSION['a_email']);
				echo "<script>
					alert('Logout Success');
					window.location='admin-login';
				</script>";
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

			case '/delete':	
				
				if(isset($_REQUEST['dlt_contact']))
				{
					$id=$_REQUEST['dlt_contact'];
					$where=array("id"=>$id);
					$res=$this->delete_where('contact',$where);
					if($res)
					{
					echo "<script>
							alert('Contact Delete Success');
							window.location='manage_contact';
						</script>";
					}
				}

				if(isset($_REQUEST['dlt_customer']))
				{
					$id=$_REQUEST['dlt_customer'];
					$where=array("id"=>$id);

					$run=$this->select_where('customer',$where);
					$fetch=$run->fetch_object();
					$del_image=$fetch->image;

					$res=$this->delete_where('customer',$where);
					if($res)
					{
					
					unlink('../shop/assets/images/customers/'.$del_image);
					echo "<script>
							alert('Customer Delete Success');
							window.location='manage_customer';
						</script>";
					}
				}

				if(isset($_REQUEST['dlt_categories']))
				{
					$id=$_REQUEST['dlt_categories'];
					$where=array("id"=>$id);

					$run=$this->select_where('categories',$where);
					$fetch=$run->fetch_object();
					$del_image=$fetch->cate_image;

					$res=$this->delete_where('categories',$where);
					if($res)
					{
					unlink('assets/images/categories/'.$del_image);	
					echo "<script>
							alert('categories Delete Success');
							window.location='manage_categories';
						</script>";
					}
				}

				if(isset($_REQUEST['dlt_product']))
				{
					$id=$_REQUEST['dlt_product'];
					$where=array("id"=>$id);
					$res=$this->delete_where('products',$where);
					if($res)
					{
					echo "<script>
							alert('Product Delete Success');
							window.location='manage_product';
						</script>";
					}
				}
			break;	


		}
			
	 }
 }

$obj=new control;

?>