<?php

	if($_GET['contactForm'] == 'Beam my data up, Scotty!') {
		$sanitizedName = filter_var($_GET['fullname'], FILTER_SANITIZE_STRING);
		$genderChoice = filter_var($_GET['gender'], FILTER_SANITIZE_STRING);
		$toolChoice = filter_var($_GET['computer'], FILTER_SANITIZE_STRING);

		echo 'Dear' .' ' .$sanitizedName .',' .'<br/>';
		echo 'Who appear to be a' .' ' .$genderChoice .'<br/>';
		echo 'Who used' .' ' .$toolChoice .'<br/>';
		echo 'Thank you for submitting the form.' .'<br/>' .'Btw, where the hell is Scotty?';
	}

?>