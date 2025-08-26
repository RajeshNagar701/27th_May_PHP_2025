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
	 
	 function insert(){
		 
	 }
	 
	 function delete(){
		 
	 }
	 
	 function update(){
		 
	 }
	 
 }

$obj=new model;

?>