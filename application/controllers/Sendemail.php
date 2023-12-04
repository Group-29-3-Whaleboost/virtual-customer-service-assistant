<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once FCPATH . 'vendor/autoload.php';

defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {

	public function index()
	{
		$token=$_GET['token'];
        $email=$_GET['email'];

        $message = "Click the following link to reset your password:\n";
        $message .= 'https://illyrian-bead.000webhostapp.com/virtual-customer-service-assistant/forgotPassword/reset_password/'.$token;
    
        $subject = 'Password Reset Request';
    
        // Load PHPMailer
        // require APPPATH . 'third_party/PHPMailer/PHPMailerAutoload.php';
    
        // Create a PHPMailer instance
        $mail = new PHPMailer;
    
        // Set up SMTP configuration (you need to replace these with your SMTP server details)
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'kavishkasanthush200@gmail.com';                     //SMTP username
        $mail->Password   = 'ghnp clfe sred ppuk';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;   
    
        // Set email parameters
        $mail->setFrom('kavishkasanthush200@gmail.com', 'kavishka');
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->Body = $message;
    
        // Try to send the email
        if ($mail->send()) {
            // Email sent successfully, redirect to a confirmation page
            $this->load->view('enduser/reset_password_confirmation');
        } else {
            // Email sending failed, handle the error
            echo 'Email sending failed: ' . $mail->ErrorInfo;
        }
	}
}
