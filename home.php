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
    $pass = $_POST['password'];


    // Query to retrieve user information
    $sql = "SELECT * FROM `myform`.`students` WHERE id = '$id' and password = '$pass';";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
    else
    {
        echo "<h5><br>User id or password incorrect </h5>";
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
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div id="container">
        <div class="name">
            <h4>Name:
                <?php
                    echo $row['fname']." ".$row['lname'];
                ?>
            </h4>
           
        </div>
        <div class="phone-number">
            <h4>Phone Number:
                <?php
                    echo $row['phone'];
                ?>
            </h4>
           
        </div>
        <form action="update.php" method="POST">
            <input type="number" name="id" placeholder="Enter ID">
            <input type="tel" name="phone" placeholder="Enter new phone number (10 digits)">
            <button type="submit">Update</button>
        </form>
        <br>
        <form action="delete.php" method="POST">
            <input type="number" name="id" placeholder="Enter ID">
            <button type="submit">Delete Account</button>
        </form>
        <br>
        <a href="login.php">Logout</a>
    </div>

    <script src="home.js"></script>
</body>
</html>
