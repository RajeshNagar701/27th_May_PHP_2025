<?php

include_once('../admin/model.php'); // 1 model load

 class control extends model { // 2 model extends for function call
	 
	 function __construct(){
		
		model::__construct(); // 3 call model __construct for db connection
		
		$url=$_SERVER['PATH_INFO']; // http://localhost/students/27th_May_PHP_2025/Project/admin/control.php
		
		session_start();

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
				if(isset($_REQUEST['submit']))
				{
					$email=$_REQUEST['email'];
					$password=$_REQUEST['password'];
					$md_password=md5($password);
					
					$where=array("email"=>$email,"password"=>$md_password);
					
					$run=$this->select_where('customer',$where);
					
					$ans=$run->num_rows; // check row wise condition
					if($ans==1)  // 1 means true
					{
						
						$fetch=$run->fetch_object();
						
						if($fetch->status=="Unblock")
						{
							$_SESSION['u_id']=$fetch->id;
							$_SESSION['u_name']=$fetch->name;
							$_SESSION['u_email']=$fetch->email;
							
							if(isset($_REQUEST['rem']))
							{
								setcookie('uname',$email,time()+(1*60*60));
								setcookie('pass',$password,time()+(1*60*60));
							}
							
							
							echo "<script>
								alert('Login Success');
								window.location='index';
							</script>";
						}
						else
						{
							
							echo "<script>
								alert('Login Failed due to Blocked Account');
								window.location='index';
							</script>";
						}
					}
					else
					{
						echo "<script>
							alert('Login Failed due to wrong creadential');
							window.location='login';
						</script>";
					}	
				}
				include('login.php');
			break;
			
			case '/user_profile':	
				$where=array("id"=>$_SESSION['u_id']);
				$run=$this->select_where('customer',$where);

				$fetch=$run->fetch_object();
				include('user_profile.php');
			break;

			case '/edit_user':	
				if(isset($_REQUEST['btn_edituser']))
				{
					$id=$_REQUEST['btn_edituser'];
					$where=array("id"=>$id);
					$run=$this->select_where('customer',$where);
					$fetch=$run->fetch_object();
					
					$old_img=$fetch->image;
					
					
					if(isset($_REQUEST['submit']))
					{
						$name=$_REQUEST['name'];
						$email=$_REQUEST['email'];
						$mobile=$_REQUEST['mobile'];
						$gender=$_REQUEST['gender'];
						$lag_arr=$_REQUEST['lag'];
						$lag=implode(',',$lag_arr);
						
						if($_FILES['image']['size']>0)
						{
							
							$image=$_FILES['image']['name'];
							$path='assets/images/customers/'.$image;  // path set
							$dup_file=$_FILES['image']['tmp_name']; // get duplicate file
							move_uploaded_file($dup_file,$path);
							
							$arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"gender"=>$gender
							,"lag"=>$lag,"image"=>$image);
							
							$res=$this->update('customer',$arr,$where);
							if($res)
							{
								unlink('assets/images/customers/'.$old_img);
								echo "<script>
									alert('Update Success');
									window.location='user_profile';
								</script>";
							}
							
						}
						else
						{
							$arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"gender"=>$gender
							,"lag"=>$lag);
							
							$res=$this->update('customer',$arr,$where);
							echo "<script>
								alert('Update Success');
								window.location='user_profile';
							</script>";
						}
						
					}
				}
				include('edit_user.php');
			break;
			
			
			case '/user_logout':	
				
				unset($_SESSION['u_id']);
				unset($_SESSION['u_name']);
				unset($_SESSION['u_email']);
				echo "<script>
					alert('Logout Success');
					window.location='index';
				</script>";
			break;

			case '/signup':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$password=md5($_REQUEST['password']);
					$mobile=$_REQUEST['mobile'];
					$gender=$_REQUEST['gender'];
					$lag_arr=$_REQUEST['lag'];
					$lag=implode(',',$lag_arr);
					
					$image=$_FILES['image']['name'];
					
					if($_FILES['image']['size']>0)
					{
						$path='assets/images/customers/'.$image;  // path set
						$dup_file=$_FILES['image']['tmp_name']; // get duplicate file
						move_uploaded_file($dup_file,$path);
					}
					
					$arr=array("name"=>$name,"email"=>$email,"password"=>$password,"mobile"=>$mobile,"gender"=>$gender
					,"lag"=>$lag,"image"=>$image);
					
					$res=$this->insert('customer',$arr);
					if($res)
					{
						echo "<script>
							alert('Signup Success');
							window.location='signup';
						</script>";
					}
				}
				include('signup.php');
			break;
			case '/single-product':	
				include('single-product.php');
			break;
		}
			
	 }
 }

$obj=new control;

?>