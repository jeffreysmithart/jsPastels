<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$subject = trim($_POST["subject"]);
	$message = trim($_POST["message"]);

if ($name == "" OR $email == "" OR $subject == "" OR $message == "") {
	echo "You must specify a value for your name, email address, subject, and message.";
	exit;
}

    foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ){
            echo "There was a problem with the information you entered.";    
            exit;
        }
    }

    if ($_POST["address"] != "") {
        echo "Your form submission has an error.";
        exit;
    }

    require_once("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!$mail->ValidateAddress($email)){
        echo "You must specify a valid email address.";
        exit;
    }

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Message: " . $message;

    $mail->SetFrom($email, $name);
    $address = "jeffrey@jeffreysmithdesigner.com";
    $mail->AddAddress($address, "Jeffrey Smith Pastels");
    $mail->Subject    = "Jeffrey Smith Pastel | Contact Form Submission | " . $name;
    $mail->MsgHTML($email_body);

    if(!$mail->Send()) {
      echo "There was a problem sending the email: " . $mail->ErrorInfo;
      exit;
    }



header("location: ../index.php?status=thanks#contact");
exit;
}
?>


			<h2 class="contact-head">contact me</h2>

			<?php if (isset($_GET['status']) AND $_GET["status"] == "thanks") { ?>

				<p>Thanks for the email. I'll be in touch with you shortly.</P>

			<?php } else { ?>

			<p>I'd love to hear from you!<br> Please <a href="mailto:jeffrey@jeffreysmithdesigner.com">email me here</a> or complete <br /> the form below to send me an email.</p>

			<form method="post" action="inc/contact.php">

				<input type="text" name="name" id="name" placeholder="name"><br/>
				<input type="text" name="email" id="email" placeholder="email"><br/>
				<input type="text" name="subject" id="subject" placeholder="subject"><br/>
				<textarea type="text" name="message" id="message" placeholder="message"></textarea><br/>
				<input type="submit" value="Send">

			</form>

			<?php } ?>
		
