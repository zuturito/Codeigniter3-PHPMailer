<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Home extends CI_Controller
{
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(array('form_validation','email'));
    }

	public function enviarCorreo($name,$subject, $email_to, $message)
	{
			require 'vendor/autoload.php';
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->CharSet = 'UTF-8';
			$mail->Host = 'smtp.office365.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'your-email@domain.com';
			$mail->Password = 'your_pass';
			$mail->SMTPSecure = 'tls';                   
			$mail->From = 'your-email@domain.com';
			$mail->FromName = $name;
			$mail->addAddress($email_to);
			$mail->WordWrap = 70;
			//$mail->addAttachment();
			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body    = $message;
			if(!$mail->send()) {
				echo 'Error: ' . $mail->ErrorInfo;
		}
	}

    public function index()
    {
        if($this->input->post('sender')){
            $name=$this->input->post('name');
            $subject=$this->input->post('subject');
            $email_to=$this->input->post('email2');
            $message=$this->input->post('message');
            $this->enviarCorreo($name, $subject, $email_to, $message);    
			echo "email sended successfully";   
        }else{
            $this->load->view('main');
        }
	}

	
}


