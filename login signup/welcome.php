<?php
    session_start();
    if(isset($_SESSION["id"]) && isset($_SESSION["pwd"]))
    {
        ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Welcome</title>
            </head>
            <body>
                <div>
                    <h2><?php echo "Welcome ".$_SESSION["id"]; ?></h2>
                </div>
                <div>
                    <h4>Sign Out!</h4>
                    <form action="logout.php" method="post">
                        <input type="submit" name="submit" value="Logout">
                    </form>
                </div>
            </body>
            </html>

        <?php
    }
    else
        header("Location : index.php");
    
?>