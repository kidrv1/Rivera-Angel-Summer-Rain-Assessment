<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Rivera, Angel Summer Rain - Emerge Assessment</title>
  </head>
  <body>

  <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => formDB
        $conn = mysqli_connect("localhost", "root", "", "formdb");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 4 values from the form data(input)
        $fname =  $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $DOB =  $_REQUEST['DOB'];
        $gender = $_REQUEST['gender'];
         
        // Performing insert query execution
        $sql = "INSERT INTO users VALUES ('$fname',
            '$lname','$DOB','$gender')";
         
        if(mysqli_query($conn, $sql)){
           echo '<div class="container p-5">';
           echo '<div class="alert alert-success" role="alert">';
           echo 'Thanks for filling out our form!';
           echo '</div>';
           echo '</div>';
          
           // Return to index.php
           echo    '<a href="index.php" class="btn btn-primary">Submit Another Form</a>';
        
           // Display Error
        } else{
            echo "ERROR: $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>