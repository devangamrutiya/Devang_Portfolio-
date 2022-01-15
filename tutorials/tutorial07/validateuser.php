<?php


echo "<pre>";
print_r($_POST);
echo "</pre>";

    session_start();
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['age']=$_POST['age'];
    $_SESSION['dob']=$_POST['dob'];
    $_SESSION['city']=$_POST['city'];
    $_SESSION['profile']=$_POST['profile'];


    echo '<script type="text/javascript"> window.open("login.php","_self");</script>';
?>