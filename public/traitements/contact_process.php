<?php
	session_start();
	try {
		$from = "habacucsentinel@gmail.com";
		$to = $_POST['dest'];
		$name = "VALIDATION D'INSCRIPTION";
		$code_validation = $_POST['code'];
		$subject = "Code de validation";

		$headers = "From: $from";
		$headers = "From: " . $from . "\r\n";
		$headers .= "Reply-To: ". $from . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$subject = "You have a message from your Bitmap Photography.";

		$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
		$body .= "<table style='width: 100%;'>";
		$body .= "<thead style='text-align: center;'><tr><td style='border:none;'>";
		$body .= "</td></tr></thead><tbody><tr>";
		$body .= "<td style='border:none;'><span class='h5'>Code de validation : </span> <h2>{$code_validation}</h2></td>";
		$body .= "</tr>";
		$body .= "</tbody></table>";
		$body .= "</body></html>";

		$send = mail($to, $subject, $body, $headers);
		echo "Un code de confirmation a été à votre adresse mail : " . $to;
	} catch (\Throwable $th) {
		echo $th;
	}

?>