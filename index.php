<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Rivera, Angel Summer Rain - Emerge Assessment</title>
  </head>
  <body class="bg-primary">
    <div class="container">
      <div class="card m-5">
        <div class="card-header text-center">
          <h3>Registration Form</h3>
        </div>
        <div class="card-body">
            <!-- Redirect page to success.php on submit -->
          <form action="success.php" method="POST">
            
            <!-- Input first name -->
            <div class="form-group m-2">
              <label for="fname">First Name</label>
              <input type="text" class="form-control form-control" name="fname" id="fname" class="fname" placeholder="Enter first name" required>
            </div>

            <!-- Input last name -->
            <div class="form-group m-2">
              <label for="lname">Last Name</label>
              <input type="text" class="form-control" name="lname" id="lname" class="lname" placeholder="Enter last name" required>
            </div>

            <!-- Input birthday -->
            <div class="form-group m-2">
              <label for="DOB">Birthday</label>
              <input type="date" class="form-control" name="DOB" id="DOB" class="DOB" required>
            </div>

            <!-- Input gender -->
            <div class="form-group m-2">
              <label for="gender">Gender</label>
              <select class="form-control" name="gender" id="gender" class="gender" required>
                <option selected disabled>Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <!-- Submit button -->
            <div class="p-2">
              <button type="submit" class="btn btn-primary float-end">Submit Form</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>