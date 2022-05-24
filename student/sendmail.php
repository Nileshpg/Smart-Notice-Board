<?php 
 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 
 
 
function sendmail($To,$Subject,$Message)
{
	$mail = new PHPMailer; 
	 
	$mail->isSMTP();                      // Set mailer to use SMTP 
	$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
	$mail->SMTPAuth = true;               // Enable SMTP authentication 
	$mail->Username = 'dnpcoetourstravels@gmail.com';   // SMTP username 
	$mail->Password = 'DNPCOE@02';   // SMTP password 
	$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
	$mail->Port = 587;                    // TCP port to connect to 
	 
	// Sender info 
	$mail->setFrom('dnpcoetourstravels@gmail.com', 'InfoGalaxy'); 
	$mail->addReplyTo('dnpcoetourstravels@gmail.com', 'InfoGalaxy'); 

	// Add a recipient 
	$mail->addAddress($To); 
	 
	// Set email format to HTML 
	$mail->isHTML(true); 
	 
	// Mail subject 
	$mail->Subject = $Subject; 
	 
	// Mail body content 
	$bodyContent = $Message;
	$mail->Body    = $bodyContent; 

	$mail->send();

}
 
?>