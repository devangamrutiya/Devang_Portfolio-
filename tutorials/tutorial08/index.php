
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Registration Form</title>
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
              <form action="uploadfile.php" method="post" enctype="multipart/form-data">
                <div class="card  bg-dark text-light">
                    <div class="card-body">
                    <div class="row p-2">
                        <div class="col text-center">
                                <h3>Registration Here</h3>
                        </div>
                    </div>


                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>User name</h6>
                        </div>
                        
                        <div class="col-md-8">
                            <input type="email" id="username" name="username" class="form-control bg-dark text-light" placeholder="name@example.com">
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>Password</h6>
                        </div>
                        <div class="col-md-8 ">
                                <input type="password" id="password" name="password" class="form-control bg-dark text-light" placeholder="Password">
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>Re-password</h6>
                        </div>
                        <div class="col-md-8 ">
                            <input type="password" id="repassword" name="repassword" class="form-control bg-dark text-light" placeholder="Confirm Password">
                        </div>
                    </div>


                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>Age</h6>
                        </div>
                        
                        <div class="col-md-8">
                            <input type="text" id="age"  name="age" class="form-control bg-dark text-light" placeholder="Age">
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>Date-Of-Birth</h6>
                        </div>
                        
                        <div class="col-md-8">
                            <input type="date" id="dob" name="dob" class="form-control bg-dark text-light">
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>City</h6>
                        </div>
                        
                        <div class="col-md-8">
                            <input type="text" id="city"  name ="city"class="form-control bg-dark text-light" placeholder="City">
                        </div>
                    </div>

                    <div class="row p-1">
                        <div class="col-md-4 p-1">
                            <h6>Profile-Picture</h6>
                        </div>
                        
                        <div class="col-md-8">
                        <input onchange="return fileValidation()" name="profile" type="file" class="form-control"  id="file" accept=".jpg,.png,.jpeg,.bmp">
                        </div>
                    </div>

                   
                    <div class="row p-3">
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button type="submit" id="register" class="btn btn-danger">REGISTER</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col p-2 text-center">
                            Already have an account <a href="login.php">Sign in </a>
                        </div>
                    </div>                
    
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
        function fileValidation() {
            var fileInput = 
                document.getElementById('file');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
                    /(\.jpg|\.jpeg|\.png|\.bmp)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Please Choose a Photo');
                fileInput.value = '';
                return false;
            } 
            else 
            {
              
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML = 
                            '<img src="' + e.target.result
                            + '"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
    </script>
        <script>
            $(document).ready(function(){
                $('#register').click(function(){
                    $username = $('#username').val().toString();
                    $psw = $('#password').val().toString();
                    $repsw = $('#repassword').val().toString();
                    $age = $('#age').val().toString();
                    $city = $('#city').val().toString();
                  
    
                    if($username == "" | $psw == "" | $repsw == "" | $age == ""  | $city == "")
                    {
                        alert("Please enter all the values...");
                        return false;
                    }
                    else
                    {
                        if($psw == $repsw)
                        {
                            alert("Registration Successful...");
                        }
                        else
                        {
                            alert("Password and Re-Password must be same");
                            return false;
                        }
                    }
                });
            });
        </script>
  </body>
</html>