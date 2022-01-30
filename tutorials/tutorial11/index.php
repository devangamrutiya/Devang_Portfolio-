<?php
require 'db.php';
session_start();
if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Add,Edit,Delete</title>
  </head>
  <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <div class="container mt-4">
        <h2 class="text-danger" align="center">Student Details</h2>
        <a class="link-primary" href="registration.php"><h5>Insert Data</h5></a>
        <table class="table table-dark table-striped text-center example">
        <thead>
        	<tr>
                    <th>Enrollment</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
          
          $sql = "select * from stud";
            $result = $db->query($sql);
            while ($row = $result->fetch_assoc()){
                // print_r($row);
            
                ?>
             <tbody class="table-light">
                 <tr>
                     <td><?=$row['enrollment'];?></td>
                     <td><?=$row['firstname']?></td>
                     <td><?=$row['lastname']?></td>
                     <td><?=$row['city']?></td>
                     <td>
                         <!-- <button class="btn btn-primary"><a class="text-white" href="user_edit.php?enrollment=<?php echo $row['enrollment'];?>">Edit</a></button> -->
                         <button class="btn btn-primary"><a class="text-white" onclick="return confirm('Do you want to Delete?');" href="user_delete.php?enrollment=<?php echo $row['enrollment'];?>">Delete</a></button>
                         
                        </td>
                    </tr>
                </tbody>
        <?php
        }
        ?>
        </table>
        </div>
  </body>
</html>