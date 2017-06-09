<?
extract($_POST);
		
		$subject = "$subject";
		$headers = "From: $name \r\nReply-To: \r\n";
		$message = "Nombre: $name <br>\r\n";
		$message .= "Telefono: $phone <br>\r\n";
		$message .= "Email: $email <br>\r\n";
		$message .= "Mensaje: $messages <br>\r\n";
		
		$address = "rmateo.dicosarosa@gmail.com";
		$name = "Página web DICOSAROSA";
		// $addressCc = "ramiro1991_mm@hotmail.com";
		// $nameCc = "Ramiro Magaña";
require 'PHPMailer/PHPMailerAutoload.php';
//require 'PHPMailer/class.phpmailer.php';
//require 'PHPMailer/class.smtp.php';
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "gator3111.hostgator.com";
//$mail->Port = 465;
$mail->Username = "hostingb";
$mail->Password = "w3bT4b45c0";
$mail->SMTPSecure = 'tls';
$mail->CharSet = "UTF-8";

$mail->SetFrom($email, $name);
$mail->addReplyTo($name);
$mail->Subject = $subject;
$mail->MsgHTML($message);
$mail->AddAddress($address, $name);
//$mail->AddCC($addressCc, $nameCc);

if($mail->Send()) {
	?>
	<a href="/">Regresar a nuestro sitio web</a><div class="success">Tu mensaje ha sido enviado correctamente.</div>
	<?
} else {
	?>
		<div>!Su mensaje no ha podido enviar!</div>
	<?
}

$mail->ClearAddresses();
$mail->Send();
?>
<!-- Thank you for contact us. As early as possible we will contact you -->