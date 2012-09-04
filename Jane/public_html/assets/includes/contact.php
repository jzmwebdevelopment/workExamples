<?php

$your_email = 'info@janewhitephotography.com';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {} else {

	foreach($_POST as $key => $value) $_POST[$key] = urldecode(trim($value));

	$name     = $_POST['name'];
	$phone   = $_POST['phone'];
	$email    = $_POST['email'];
	$comments = $_POST['comments'];
	$errors  = array();

	if ($name == '') {
	  $errors[] = "Please enter your name";
	}

	if ($email == '') {
	  $errors[] = "Please enter your email address";
	} else if (strpos($email, '@') === false) {
	  $errors[] = "Please enter a valid email address";
	}

	if ($comments == '') {
	  $errors[] = "Please enter a message to send";
	}


	if (sizeof($errors) > 0) {
	  $str = implode("\n", $errors);
	  $status = '<p class="errorMessage">There was an error with your submission!  Please correct the following:</p>'."\n\n" . $str;
	} else {

		$time = date('r');
		$body = <<<EOD
		Hello,

		A message was sent to you from $name on $time.

		Email: $email
		Phone: $phone
		
		Here is their message:

		$comments
EOD;

		mail($your_email,
		     "Website Enquiry",
		     $body,
		     "From: Jane White Photography (Website)\r\nReply-To: $email\r\nContent-Type: text/plain; charset=ISO-8859-1");
	
		}
	
		$status = '<p class="successMessage"> Thank you '. $_POST['name'] .'</p>';
		unset($_POST);
		
	}
	
	echo($status);
?>