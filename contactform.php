<?php

    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'pospishil@vop-develop.cz';
    $subject = 'VOP kontaktní formulář';
    $body = "<br>Od: $name<br>Společnost: $company<br>Email: $email<br><br>Zpráva:<br> $message";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n" .
	    "Reply-To: $email" . "\r\n" .
	    "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        header('Location: https://vop-develop.cz/Thank-you.html');
    } else {
        echo "<script>alert('Zprávu se nepodařilo odeslat.<br>Zkuste to prosím znovu.');</script>";
        header('Location: https://vop-develop.cz/');
    }

?>
