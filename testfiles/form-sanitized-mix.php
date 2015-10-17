<?php 

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
		echo 'You do not want to live anywhere'.'<br />';
	}

?>