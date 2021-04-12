<?php

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$emailFrom = $_POST['email'];
		$text = $_POST['message'];

		$mailTo = 'ishnualahi@hotmail.com';
		$headers = 'From: website'.$emailFrom;
		$txt = 'You have recieve an email from'.$name.'.\n\n'.$text;

		mail($mailTo, $text, $txt, $headers);
		header('Location: index.php?mailsent');
	}

?>