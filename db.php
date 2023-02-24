<?php

include_once("config.php");

if(isset($_POST))
{    
   $name = $_POST['name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
   $sql = "INSERT INTO contact (fname, lname, email, subject, message)
   VALUES ('$name', '$last_name', '$email','$subject', '$message')";
   if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }
   mysqli_close($conn);
}