<?php
	$to = 'info@shermanfs.co.uk';
	$errors = array();
​
​
	// Check if name has been entered
	if ( ! isset( $_POST['name'] ) ) {
		$errors['name'] = 'Please enter your name';
	}
	
	// Check if email has been entered and is valid
	if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Please enter a valid email address';
	}
	
	//Check if message has been entered
	if (!isset($_POST['message'])) {
		$errors['message'] = 'Please enter your message';
	}

	$errorOutput = '';
​
	if(!empty($errors)){
​
		$errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
 		$errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
​
		$errorOutput  .= '<ul>';
​
		foreach ($errors as $key => $value) {
			$errorOutput .= '<li>'.$value.'</li>';
		}
​
		$errorOutput .= '</ul>';
		$errorOutput .= '</div>';
​
		echo $errorOutput;
		die();
	}
​
​
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
​
	if(isset($_SERVER['HTTP_REFERER'])) {
      $message .= "\n The form is submitted at: ".$_SERVER['HTTP_REFERER'];
   }
​
	$from = $email;
	$subject = 'Contact Form : Sherman & Co Financial Services';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
​
​
	//send the email
	$result = '';
	if (mail ($to, $subject, $body)) {
		$result .= '<div class="alert alert-success alert-dismissible" role="alert">';
 		$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		$result .= 'Thank You for Contacting Sherman & Co Financial Services! We will be in touch shortly.';
		$result .= '</div>';
​
		echo $result;
		die();
	}
​
	$result = '';
	$result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
	$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
	$result .= 'Something bad happened while you were sending this message. Please try again later';
	$result .= '</div>';
​
	echo $result;