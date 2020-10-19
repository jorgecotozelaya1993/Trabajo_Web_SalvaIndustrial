<?php

// Define some constants
define( "RECIPIENT_NAME", "Salvador Hernandez" );
define( "RECIPIENT_EMAIL", "gerencia@salvaindustrial.com" );


// Read the form values
$success = false;
$senderName = isset( $_POST['username'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$subject = isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(DE:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $phone && $subject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "DE: " . $senderName . " <" . $senderEmail . ">";
  $msgBody = " Telefóno: ". $phone . " Asunto: " . $subject ." Mensaje: " . $message . "";
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  //header('Location: contactenos.php');
  echo "<script>alert('Su mensaje ha sido enviado exitosamente');window.location='contactenos.php'</script>";  
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: index.php');	
}

?>