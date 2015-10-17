<?php

	if($_GET['contactForm'] == 'Beam my data up, Scotty!') {
		$sanitizedName = filter_var($_GET['fullname'], FILTER_SANITIZE_STRING);
		$genderChoice = filter_var($_GET['gender'], FILTER_SANITIZE_STRING);

		echo 'Dear' .' ' .$sanitizedName .',' .'<br/>';
		echo 'Who appear to be a' .' ' .$genderChoice .'<br/>';

	if (isset($_GET['computers'])) {
		$inputs = array();
		$inputs = $_GET['computers'];
		foreach ($inputs as $input) {
			$computers[] = filter_var($input, FILTER_SANITIZE_STRING);
		}
		foreach ($computers as $computer) {
			echo 'Who used' .' ' .$computer .'<br />';
		}
	} else {
		echo 'You really despise computer'.'<br />';
	}

		echo 'Thank you for submitting the form.' .'<br/>' .'Btw, where the hell is Scotty?';
	}

?>