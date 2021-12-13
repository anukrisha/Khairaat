<?php
    session_start();
    if(isset($_SESSION["email"]) && isset($_SESSION["pwd"]))
    {
        header("Location: welcome.php");
    }
    else
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>
    <style>
        .form-area
        {
           margin: 5%; 
           width: 20vh;
        }
        .form-area input
        {
            margin: 2%;
            padding: 1%;
        }
    </style>
</head>
<body>
    <div>
        <h1>Sign Up</h1>
        <form action="redirect.php" method="post" class="form-area" required>
            Name : <input type="text" name="name" placeholder="Enter your name: " required>
            Email : <input type="email" name="email" placeholder="Enter your email: " required>
            Phone : <input type="text" name="phone" placeholder="Enter your phone number: " required>
            Date of Birth : <input type="date" name="dob" required>
            Password : <input type="password" name="pwd" placeholder="Enter your password: " required>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <div>
        <h1>Sign In</h1>
        <form action="redirect.php" method="post" class="form-area" required>
            Email : <input type="email" name="id" placeholder="Enter your email: " required>
            Password : <input type="password" name="pwd" placeholder="Enter your password: ">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
<?php
    }
    session_destroy();
?>