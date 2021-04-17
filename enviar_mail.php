	<?php
	require_once 'class/class.phpmailer.php';
	require_once 'class/class.smtp.php';
	$subject = 'Restablecimiento de la contraseña';
	$file = '';
	$mail = new PHPMailer;
	$mail->IsSMTP();								//Sets Mailer to send message using SMTP
	$mail->Host = $mail_host;		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	$mail->Port = $mail_port;								//Sets the default SMTP server port
	$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
	$mail->Username = $mail_user;					//Sets SMTP username
	$mail->Password = $mail_pass;					//Sets SMTP password
	$mail->SMTPSecure = 'tls';
	$mail->CharSet = 'UTF-8';
	$mail->From = 'upsoprograma1@gmail.com';					//Sets the From email address for the message
	$mail->FromName = 'GRUPO 1 – Gestión Covid Municipal';				//Sets the From name of the message
	$mail->AddAddress($destino);		//Adds a "To" address
	$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	$mail->IsHTML(true);							//Sets message type to HTML
	$mail->AddAttachment($file);					//Adds an attachment from a path on the filesystem
	$mail->Subject = $subject;				//Sets the Subject of the message
	$mail->Body = '<p style="font-size:1.5em;color:#73C0E9;"><strong>' . $nom_mail . '</strong></p> 
 				   <p style="font-size:1.1em;">Hemos recibido una solicitud para restablecer su contraseña de acceso al Sistema de Gestión Covid Municipal. <br>
					                           
					                           Su clave de acceso es: ' . $nueva_clave . ' <br><br>  
					                           Si usted no ha solicitado este restablecimiento de contraseña, no necesita realizar ninguna acción.<br>
                                               Si necesita ayuda, por favor póngase en contacto con el administrador del sitio </p>';


	if ($mail->Send()){
		$mensaje_error = 'Clave de Recuperación enviada a su Mail';
	} 


	?>