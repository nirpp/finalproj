<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration Page
        </title>
        <link rel="stylesheet" href="new.css">

    </head>
    <body>
        <h1>
            Registration Form
        </h1>
        <hr>
        <h4>Enter Your Details</h4>
     
        <hr>
        <div>

            <form>
                <div class="form_wrap">
                  <div class="input_grp">
                    <div class="input_wrap">
                      <label for="fname">First Name</label>
                      <input type="text" id="fname">
                    </div>
                    <div class="input_wrap">
                      <label for="lname">Last Name</label>
                      <input type="text" id="lname">
                    </div>
                  </div>
                  <div class="input_wrap">
                    <label for="email">Email Address</label>
                    <input type="text" id="email">
                  </div>

                  <div class="input_wrap">
                    <label for="Gender">Gender</label>
                    <input type="text" id="Gender">
                  </div>








                  <div class="input_wrap">
                    <label for="city">City</label>
                    <input type="text" id="city">
                  </div>
                  <div class="input_wrap">
                    <label for="country">Country</label>
                    <input type="text" id="country">
                  </div>
                  <div class="input_wrap">
                    <input type="submit" value="Register Now" class="submit_btn"><br>
                    <a href="upload.php">Next</a>
                  </div>
                </div>
                
              </form>
            <hr>
            
        </div>
<!--INSERT INTO `details` (`sno`, `First_name`, `Last_name`, `email`, `gender`, `city`, `country`, `dt`) VALUES ('1', 'testname', 'xyz', 'xyz@gmail.com', 'male', 'Ponda', 'India', current_timestamp());-->
<script src="index.js"></script>
    </body>
</html>
<?php
$insert = false;
if(isset($_POST["Register Now"])){
    // Set connection variables
    $localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "registration";  #database name

    // Create a database connection
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    // Check for connection success
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city= $_POST['city'];
    $country = $_POST['country'];
    $sql = "INSERT INTO 'registration'.'details'('First_name', 'Last_name', 'email', 'gender', 'city', 'country', 'dt') VALUES ('$First_name', '$Last_name', '$email', '$gender', '$city', '$country', current_timestamp());";
     //echo $sql;

    // Execute the query
    if($conn->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }

    // Close the database connection
    $conn->close();
}
?>