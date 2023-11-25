<?php
if (isset($_POST['fname']))
{
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if(!$conn)
    {
        die("Connection failed with database due to error ". mysqli_connect_error());
    }
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    // inserting into database
    $sql = "INSERT INTO `myform`.`students` (`fname`, `lname`, `id`, `password`, `phone`) VALUES ('$fname', '$lname', '$id', '$password', '$phone');";

    if ($conn->query($sql) == TRUE)
    {
        echo "<h4>Successfully submitted</h4>";
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
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Student Registration Form</h1>
    <form action="index.php" method="post">
      <input type="text" name="fname" placeholder="First Name" required>
      <input type="text" name="lname" placeholder="Last Name" required>
      <input type="text" name="id" placeholder="Roll No./ID" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
      <input type="tel" name="phone" placeholder="Contact Number" required>
      <button type="submit">Submit</button>
    </form>
    <a href="login.php" class="btn btn-primary">Login</a>
  </div>
  <script src="script.js"></script>
</body>
</html>


