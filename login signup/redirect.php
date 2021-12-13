<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
  if(isset($_POST["name"]))
    {
        $sql = "INSERT INTO labtest VALUES('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["phone"]."', '".$_POST["dob"]."', '".$_POST["pwd"]."')";
        if(mysqli_query($conn, $sql))
          {
            echo "Signed up successfully";
            session_start();
            $_SESSION["id"] = $_POST["email"];
            $_SESSION["pwd"] = $_POST["pwd"];
            header("Location: welcome.php");
          }
          else
            echo "Cannot perform insertion";
    }
  elseif(isset($_POST["id"]))
    {
        $sql = "SELECT * FROM labtest WHERE email='".$_POST["id"]."' AND password='".$_POST["pwd"]."'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
          while($row = mysqli_fetch_assoc($result)) 
          {
            echo "Signed in successfully";
            session_start();
            $_SESSION["id"] = $_POST["id"];
            $_SESSION["pwd"] = $_POST["pwd"];
            header("Location: welcome.php");
          }
        } 
        else 
        {
          echo "ID and Password don't match!";
}
    }
  else
    die("No request recieved!");

}

?>