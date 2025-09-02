<?php

 class model{
	 
	 public $conn="";
	 function __construct(){
						// server_name/uname/pass/db_name
		$this->$conn=new mysqli('localhost','root','','topstech');
	 }
	 
	 function select($tbl){
		 
		 $sel="select * from $tbl";   // query
		 $run=$this->$conn->query($sel);  // query run on db
		 
		 while($fetch=$run->fetch_object()){
			 $arr[]=$fetch;
		 }
		 return $arr;
	 }
	 
	 function insert($tbl,$arr){
		 
		 //$arr=array("cate_name"=>$cate_name,"cate_image"=>$cate_image);
		 
		 $array_key=array_keys($arr);  // array("0"=>cate_name,"1"=>cate_image)
		 $col=implode(",",$array_key); // cate_name,cate_image   // arr to string convert
		 
		 $array_value=array_values($arr);  
		 $values=implode("','",$array_value); 
		 
		 $ins="insert into $tbl ($col) values('$values')"; //'men','men.jpg'
		 $run=$this->$conn->query($ins);
		 return $run;
	 }
	 
	 function delete(){
		 
	 }
	 
	 function update(){
		 
	 }
	 
 }

$obj=new model;

?>