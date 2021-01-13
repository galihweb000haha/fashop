<?php 

$data = $_POST;

// SANITIZING
$fname = _myFilter($data['fname']);
$lname = _myFilter($data['lname']);
$company = _myFilter($data['company']);
$address = _myFilter($data['address']);
$phone = (int)_myFilter($data['phone']);
$email = _myFilter($data['email']);
$payment = _myFilter($data['payment']);



function _myFilter($data){

	/* The bellow code will avoid Cross Site Scripting
		removes space and backslash characters
	*/
	$data = htmlspecialchars(stripslashes(trim($data)));

	// The bellow code will remove all HTML tags from a string
	return filter_var($data, FILTER_SANITIZE_STRING);
}


// santize email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email;

// VALIDATING
// validate phone
if(!is_numeric($phone)){
	// phone is not valid
	echo "<script>alert('Phone not valid')</script>";
}
// validating email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	// email is not valid
	echo "<script>alert('Email not valid')</script>";	
}



