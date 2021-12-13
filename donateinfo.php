<?php
    
    $bookname=$_POST['bookname'];
    $author=$_POST['author'];
    $publisher=$_POST['publisher'];
    $booktype=$_POST['booktype'];
    $subject=$_POST['subject'];
    $standard=$_POST['standard'];
    $genre=$_POST['genre'];

 echo $booktype;

    


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
        
        if($booktype=='Non Academic')
        {

            
            $sql="INSERT INTO donated_books (genre, book_name, author, publisher, type)  VALUES('$genre', '$bookname', '$author', '$publisher', '$booktype')";
            if ($conn->query($sql) === TRUE) {

                header("Location: thankyou.php");
        
                
            } else {
                die ("Error: " . $sql . "<br>" . $conn->error);
            }
            
        }
        if($booktype=='Academic')
        {
            $sql="INSERT INTO donated (subject, standard, book_name, author, publisher,type) VALUES('$subject', $standard, '$bookname', '$author', '$publisher', '$booktype')";
            if ($conn->query($sql) === TRUE) {

                header("Location: thankyou.php");
     
        
                
            } else {
                die ("Errorr: " . $sql . "<br>" . $conn->error);
            }

        }
        


        
    } 
    else 
    {
        die( "Error: " . $sql . "<br>" . $conn->error);
    }

}





?>