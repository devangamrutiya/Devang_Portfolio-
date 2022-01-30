<?php 
session_start();
require "db.php";

$enrollment = (isset($_GET['enrollment']))?$_GET['enrollment']:0;

if($enrollment!=0){
	$str = "delete from stud where enrollment=$enrollment";
    // echo $str;
    // exit;
	$db->query($str);
}

header("location:index.php");

?>