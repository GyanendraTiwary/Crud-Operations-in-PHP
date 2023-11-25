<?php
if (isset($_POST['id']))
{
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if(!$conn)
    {
        die("Connection failed with database due to error ". mysqli_connect_error());
    }
    
    
    $id = $_POST['id'];


    // Query to update phone number
    $sql = "DELETE FROM `myform`.`students` WHERE id = '$id'";
   
    if ($conn->query($sql) == TRUE)
    {
        echo "<h4>Successfully updated</h4>";
    }
    else
    {
        echo "ERROR: ".$sql."<br>".$conn->error;
    }


    $conn->close();

    //
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="login.php">Login Page</a>
</body>
</html>