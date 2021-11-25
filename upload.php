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
                <input type="text" name="fname" placeholder="enter name">
                <div class="line-box">          
                <div class="line"></div>
                </div>
            </label>
            <label>
                <input type="text" name="lname" placeholder="enter lastname">
                <div class="line-box">          
                <div class="line"></div>
                </div>
            </label>
            <label>
                <input type="text" name="email" placeholder="email">
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
            <label>
                <input type="password" name="password" placeholder="password">
                <div class="line-box">          
                <div class="line"></div>
                </div>
            </label>
         
            </form>
            <hr>

    </body>
</html>

<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "registration";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into fileup(title,image) VALUES('$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 
 
?>

