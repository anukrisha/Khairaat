<?php

$name=$_POST['name'];
    
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $conn = mysqli_connect('localhost','root', '','khairaat');
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    
    $sql="USE khairaat";
    if ($conn->query($sql) === TRUE) 
    {
        
    $sql = "INSERT INTO user (email, password, name, mobileNo) VALUES ('$email', '$password', '$name', $mobile)";
    if ($conn->query($sql) === TRUE) {
        
        session_start();
            $_SESSION["id"] = $_POST["email"];
            $_SESSION["pwd"] = $_POST["password"];
            header("Location: tysignup.php");
    } else {
        die ("Error: " . $sql . "<br>" . $conn->error);
    }
        
    } 
    else 
    {
        die( "Error: " . $sql . "<br>" . $conn->error);
    }

}





?>