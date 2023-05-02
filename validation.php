<?php 
 session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);

    
   if ( strlen($name) < 1 || strlen($email) < 1 || strlen($subject) < 1 || strlen($message) < 1) {
            
            $_SESSION['error'] = "Please fill out all fields";
            header("Location: contact.php#error");
            exit;

        }   
    
    elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $_SESSION['error'] = "Only letters and spaces are allowed in the name field";
            header("Location: contact.php");
            exit;
    }

    elseif (strpos($email, '@' ) == false) {
            $_SESSION['error'] = "Email must have an at-sign (@)";
            header("Location: contact.php");
            exit;
        }
    
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid email format";
            header("Location: contact.php");
            exit;
    }
    
    else {
             
            $to = "hello@cikadacircus.com";
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $headers = "From: $name <$email>";

            mail($to, $subject, $message, $headers);
            
            $_SESSION['success'] = "Thank you, your email has been sent";
            header("Location: contact.php");
            exit;
             
         }
}

function test_input($data) {
  $data = trim($data);
  $data = strip_tags($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  
  return $data;
}

       
    
    
?>