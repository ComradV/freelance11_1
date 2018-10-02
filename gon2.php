<?php
//mail ( "info@ulusalyarisma.com", "fsfd", "mesajjjjjj", "Content-type: text/html; charset=utf-8\r\n");
// form is submitted with POST method
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	
	// define variables and set to empty values
	$name_error = $email_error = $phone_error = $url_error = "";
	$name = $email = $phone = $message = $url = $success = "";
	$isimsoyisim = $_POST ["name"];
	$email = $_POST ["email"];
	$telefon = $_POST ["phone"];
	$message = $_POST ["message"];
	$alici = "info@antalyaff.net";
	$konu = "Ulusal Yarisma Basvuru Formu";
	
		// your site secret key
		$secret = '6LcTnDMUAAAAAJRB91KuJMi1khP2fagayhQf1_Ph';
		// get verify response data
		$verifyResponse = file_get_contents ( 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST ['g-recaptcha-response'] );
		$responseData = json_decode ( $verifyResponse );
		if ($responseData->success) {
		
			
			$mesajlar .= "iletisim formu mesaji<br/><br/>";
			$mesajlar .= "isim Soyisim: " . $isimsoyisim . "<br/>";
			$mesajlar .= "E-Mail: " . $email . "<br/>";
			$mesajlar .= "Telefon: " . $telefon . "<br/>";
			$mesajlar .= "Mesaj: " . $message . "<br/>";
			
			$to = 'info@ulusalyarisma.com';
			$subject = 'AntalyaFF form';
			if (mail ( $to, $subject, $mesajlar, "Content-type: text/html; charset=utf-8\r\n" )) {
				$success = "Başvurunuz Başarı ile Alınmıştır, Teşekkürler!";
				$name = $email = $phone = $message = $url = '';
			}
		}
		 else {
	$success = "Lütfen Tekrar Deneyiniz!";
		 }
}

?>