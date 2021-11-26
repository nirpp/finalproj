<!DOCTYPE html>
<html>
    <head>
        <title>
            upload page
        </title>
        <link rel="stylesheet" href="style.css">
    <body>
        
            <h3>Enter the Project Details</h3>
        </div>
        <form>
         
         
            <label>
                <input type="text" name="fname" placeholder="enter Project name">
                <div class="line-box">          
                <div class="line"></div>
                </div>
            </label>
            <label>
                <input type="text" name="projStatus" placeholder="Project Status">
                <div class="line-box">          
                <div class="line"></div>
                </div>
            </label>
            <label>
                <input type="text" name="Reason" placeholder="Reason for Cancellation">
                <div class="line-box">          
                <div class="line"></div>
                </div>
            </label>
            <label>
                <input type="text" name="username" placeholder="username">
                <div class="line-box">          
                <div class="line"></div>
                </div>
            </label>
           
         
            </form>
            <hr>

    </body>
</html>

<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
if(!$conn){
    die("connection to this database failed due to" . mysqli_connect_error());
}
$fname = $_POST['fname'];
    $projstatus = $_POST['projstatus'];
    $reason = $_POST['reason'];
    $username = $_POST['username'];
    
    $sql = "INSERT INTO projdetails('fname', 'projstatus', 'reason', 'username' ) VALUES ('$fname', '$projstatus', '$reason', '$username');"
// Check connection
if ($conn->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $conn->error";
}

// Close the database connection
$conn->close();
?>