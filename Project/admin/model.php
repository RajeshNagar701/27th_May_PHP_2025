<?php

 class model{
	 
	 public $conn="";
	 function __construct(){
						// server_name/uname/pass/db_name
		$this->conn=new mysqli('localhost','root','','topstech');
	 }
	 
	 function select($tbl){
		 
		 $sel="select * from $tbl";   // query
		 $run=$this->conn->query($sel);  // query run on db
		 
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
		 $run=$this->conn->query($ins);
		 return $run;
	 }
	 
	 
	 
	 function select_where($tbl,$where){
		 
		 $sel="select * from $tbl where 1=1";   // 1=1 means query continue
		 
		 $array_key=array_keys($where);
		 $array_value=array_values($where);
		 $i=0;
		 foreach($where as $w)
		 {
			$sel.=" and $array_key[$i]='$array_value[$i]'";
			$i++;	
		 }
		 
		 $run=$this->conn->query($sel);  // query run on db
		
		 /* login	
		 $ans=$run->num_rows();
		 */
		 
		 /* data fetch 
		 while($fetch=$run->fetch_object()){
			 $arr[]=$fetch;
		 }
		 */
		 return $run;
	 }
	 
	 
	 function delete(){
		 
	 }
	 
	 function update(){
		 
	 }
	 
 }

$obj=new model;

?>