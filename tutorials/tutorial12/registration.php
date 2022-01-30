<?php 

    require 'db.php';

    
    $enrollment="";
    $firstname="";
    $lastname="";
    $city="";

    
    $enrollment = (isset($_GET['enrollment']))?$_GET['enrollment']:'';
    $sql = "select * from stud where enrollment='$enrollment'";
    $result = $db->query($sql);
    $row =$result->fetch_assoc();
    
    if($enrollment!=''){
        
        $enrollment=$_GET['enrollment'];
            
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $city=$row['city'];
    }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, #b92b27, #1565c0)
        }
        a:link 
        {
            color: #dc3545;
        }
    </style>
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3 p-5">
            <form action="user_add.php" method="post" enctype="multipart/form-data">
                <div class="card  bg-dark text-light">
                    <div class="card-body">
                    <div class="row p-2">
                        <div class="col text-center">
                                <h3>Registration Here</h3>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="<?=$enrollment?>">

                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>Enrollment</h6>
                        </div>
                        
                        <div class="col-md-8">
                            <input type="text" name="enrollment" id="enrollment"  class="form-control" placeholder="Enter Enrollment" value="<?=$enrollment?>">                    
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>First name</h6>
                        </div>
                        
                        <div class="col-md-8">
                            <input type="text" name="firstname" id="firstname"  class="form-control"  placeholder="Enter Firstname" value="<?=$firstname?>">                    
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>Last name</h6>
                        </div>
                        <div class="col-md-8 ">
                            <input type="text" name="lastname" id="lastname"  class="form-control" placeholder="Enter Lastname" value="<?=$lastname?>">                    
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>City</h6>
                        </div>
                        
                        <div class="col-md-8">
                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter City"  value="<?=$city?>">                    
                        </div>
                    </div>

                   

                    <div class="row p-3">
                        <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" id="register" class="btn btn-primary">REGISTER</button>
                        </div>
                    </div>
                                    
    
                </div>
                </div>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>
