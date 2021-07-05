<?php	
	if (empty($_POST['nome']) && strlen($_POST['nome']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['mensagem']) && strlen($_POST['mensagem']) == 0)
	{
		return false;
	}
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Nome: $nome \nEmail: $email \nMensagem: $mensagem \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>