<?php

$roll_no = $_GET['roll_no'];
$name = $_GET['name'];
$father_name = $_GET['father_name'];
$mobile_no = $_GET['mobile_no'];
$password = $_GET['password'];

try{
include_once('init.php');


$sth = $connection->prepare("INSERT INTO students (roll_no, name, fathers_name, mobile_no, password) VALUES ( :db_roll_no, :db_name, :db_fathers_name, :db_mobile_no, :db_password)");

$sth->bindParam(':db_roll_no', $roll_no);
$sth->bindParam(':db_name', $name);
$sth->bindParam(':db_fathers_name', $father_name);
$sth->bindParam(':db_mobile_no', $mobile_no);
$sth->bindParam(':db_password', $password);

/*
$sth->execute();
echo "Data Inserted";
*/

if($sth->execute()){
echo "Data Inserted";	
}else{
	echo "Something Went Wrong!";
}

//try end
}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}//catch end

?>