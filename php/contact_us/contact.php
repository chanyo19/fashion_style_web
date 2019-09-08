<?php
if($_POST)
{
require('constant.php');
    $title      = filter_var($_POST["title"], FILTER_SANITIZE_STRING);
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $content   = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	if(empty($user_phone)) {
		$empty[] = "<b>Mobile No</b>";
	}	
	if(empty($content)) {
		$empty[] = "<b>Message</b>";
	}

	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
        die($output);
	}
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
	
	//reCAPTCHA validation
	if (isset($_POST['g-recaptcha-response'])) {
		
		require('autoload.php');		
		
		$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY, new \ReCaptcha\RequestMethod\SocketPost());

		$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

		  if (!$resp->isSuccess()) {
				$output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
				die($output);				
		  }	
	}
	
	$toEmail = "chandimalm@dtech.lk";
	$mailHeaders = "From: " . strip_tags($user_email) . "\r\n";
	if (mail($toEmail, "Contact Mail", $message, $mailHeaders)) 
	
	$to = 'chandimal.zone@gmail.com';

    $subject = 'Fashion Style Contact Form';
	
	$headers = "From: " . strip_tags($user_email) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($user_email) . "\r\n";
    //$headers = "From: " . strip_tags($email) . "\r\n";
    //$headers .= "Reply-To: " . strip_tags($email) . "\r\n";
	$headers .= "CC: chandimalm@dtech.lk\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';

    $message .= '<table width="500"><tr><td colspan="2" style="background: #000000; color: #FFFFFF;">Contact Form Information</td></tr>';
    $message .= '<tr><td>Subject</td><td>' . $title . '</td></tr>';
    $message .= '<tr><td>Name</td><td>' . $user_name . '</td></tr>';
    $message .= '<tr><td>Email</td><td>' . $user_email . '</td></tr>';
    $message .= '<tr><td>Mobile</td><td>' . $user_phone . '</td></tr>';
    $message .= '<tr><td>Comments</td><td>' . $content . '</td></tr></table>';
    $message .= '</body></html>';

    mail($to, $subject, $message, $headers);
	
		if (mail($to, $subject, $message, $headers)) {
		
	
	    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the comments. We will get back to you shortly.'));
	    die($output);
	} else {
	    $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'.SENDER_EMAIL));
	    die($output);
	}
}
?>