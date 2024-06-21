<?php 

$name = $_POST['Name'];
$email = $_POST['email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];




$valueToAdd = array($name,$email,$subject,$message);

$fp = fopen('contact.csv','a+');

    fputcsv($fp, $valueToAdd);
    
fclose($fp);


if ( isset( $_POST["submit"] ) && !empty($nom) && !empty($email) && !empty($subject) ) {
    // (deal with the submitted fields here) 
    header( "Location: redirection.php " );
    exit();     
  } else {
// (deal with the submitted unfields here)
header( "Location: thanks.php" );
} 



