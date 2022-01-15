<?php

  session_start();  


  if(isset($_POST['login']))  
  {
       $user = $_POST['username'];
       $pass = $_POST['password'];


       if(isset($_SESSION['username']))   
       {
            $valuser=$_SESSION['username'];
            $valpass=$_SESSION['password'];
            
            if(($user == $valuser)  && ($pass == $valpass))
            {

	header("location:index.php");
            }
            else
            {
                echo '<script type="text/javascript"> alert("Invalid Username Or Password");</script>';        
            }
        }
        else
        {
                echo '<script type="text/javascript">
                           alert("Please Registration First");
                           window.open("registration.php","_blank");
                      </script>';             
        }
      
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Login Form</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, #b92b27, #1565c0)
        }
        .a{
           text-emphasis-color: #dc3545;
        }
        
    </style>
  </head>
  <body>
      
      
   <div class="container">
    <div class="row">
        <div class="col-sm-6 offset-3 p-5">
        <form action="login.php" method="post">
            <div class="card bg-dark text-light">
                <div class="card-body">
                <div class="row p-2">
                    <div class="col text-center">
                            <h3>Login Here</h3>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4 p-2">
                        <h6>Username</h6>
                    </div>
                    
                    <div class="col-md-8">
                        <input type="email"  name="username" class="form-control" placeholder="Enter Username">                    
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4 p-2">
                        <h6>Password</h6>
                    </div>
                    <div class="col-md-8 ">
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">                    
                    </div>
                </div>
                <div class="row p-3">
                    <div class="d-grid gap-2 col-4 mx-auto">
                  <button type="submit" name="login" class="btn btn-danger">Login</button>

                      </div>
                </div>
                <div class="row">
                    <div class="col p-2 text-center">
                        New User <a  href="registration.php">Register Here</a>
                    </div>
                </div>                

            </div>
        </div>
    </div>
        </form>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

   
  </body>
</html>