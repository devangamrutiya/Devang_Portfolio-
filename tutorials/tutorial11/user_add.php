<?php

require('db.php');

session_start();

// echo "<pre>";
// print_r($_POST);
// echo "</pre";




$enrollment= isset($_POST['enrollment']) ? $_POST['enrollment']:"";
$firstname= isset($_POST['firstname']) ? $_POST['firstname']:"";
$lastname= isset($_POST['lastname']) ? $_POST['lastname']:"";
$city= isset($_POST['city']) ? $_POST['city']:"";


$sql="insert into stud values('$enrollment','$firstname','$lastname','$city')";

if($db->query($sql))
{
    $_SESSION['message']="Record Inserted";
}
else
{
    $_SESSION['message']="Insertion Failed";
}


header("location:index.php");

?>