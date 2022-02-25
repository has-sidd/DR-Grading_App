<?php
/*define('SMTP_SERVER','mail.nedian.org.pk');
define('SMTP_USERNAME','iac.registration@nedian.org.pk');
define('DEFAULT_EMAIL','iac.registration@nedian.org.pk');
define('DEFAULT_EMAIL_NAME','NEDIAN IAC 2019');
define('SMTP_PASSWORD','m=*r.(NR;S_=');*/
define('SMTP_SERVER','smtp.gmail.com');
define('SMTP_USERNAME','maarij.qamar@gmail.com');
define('DEFAULT_EMAIL','maarij.qamar@gmail.com');
define('DEFAULT_EMAIL_NAME','A-Eye Diagnostics');
define('SMTP_PASSWORD','hello1234');

function send_email_attachment($to,$subject,$message,$fromEmail=DEFAULT_EMAIL,$fromName=DEFAULT_EMAIL_NAME){
	//$file_name="Instrux-Weekly-Report-17-Location-66-Device-From-2019-10-01-To-2019-10-31.pdf";
	// Constants such as SMTP_SERVER defined in config.php
	try{
		$mail = new PHPMailer\PHPMailer\PHPMailer(true);
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = SMTP_SERVER;  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = SMTP_USERNAME;                 // SMTP username
		$mail->Password = SMTP_PASSWORD;
		
		// $bankslip="NEDIAN IAC 2019 BANK DEPOSIT SLIP";
		// //$mail->addAttachment("Vouchers/".$filename.".pdf");
		// $mail->addAttachment("Vouchers_Local/".$filename.".pdf"); 
		// $mail->addAttachment("bankslip/".$bankslip.".pdf");                            // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

		$mail->Port       =  465;

		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);

		//$mail->addCustomHeader('X-custom-header: custom-value');
		$mail->addCustomHeader('MIME-version', "1.0");

        //$mail->addCustomHeader('Content-type', "text/calendar; method=REQUEST; charset=UTF-8");
        $mail->addCustomHeader('From', $fromEmail);
        $mail->addCustomHeader('Reply-To', 'maarij.qamar@gmail.com');
        //$mail->addCustomHeader('Content-Transfer-Encoding', "8bit");
        //$mail->addCustomHeader('X-Mailer', "Microsoft Office Outlook 10.0");
        //$mail->addCustomHeader("Content-class: urn:content-classes:calendarmessage");

		$mail->From = $fromEmail;
		$mail->FromName = $fromName;
		$mail->addAddress($to);   // Add a recipient
		//echo $to;  
		$mail->AddReplyTo( 'maarij.qamar@gmail.com', 'A-Eye Diagnostics' );
		$mail->isHTML(true);                                  // Set email format to HTML


		$mail->Subject = $subject;
		$mail->Body    = $message;
		$mail->AltBody = strip_tags($message);

        //begin of HTML message 

        
		if(!$mail->send()) {
			return 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			//echo 'Message has been sent';
			return TRUE;
		}

	} catch (Exception $e) {
		return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

	return FALSE;

}
?>