<?php @session_start();
  
$appointment = true;
require_once('../recaptcha/recaptchalib.php');
require_once('../init.php');


$bot = filter_input(INPUT_POST, 'CustomerID');


// Check if a blind bot has filled out the Form
if(strlen($bot))
{
  echo "bot detected!";
  header('HTTP/1.0 403 Forbidden');  
}
else
{  
	$name = filter_input(INPUT_POST, 'name');
	$area_code = filter_input(INPUT_POST, 'area_code');
	$phone = filter_input(INPUT_POST, 'phone');

	// Construck Mail Header
	$to = "To: $contactMail";
	$header = $to . "\r\n";
	$header .= 'From: Web Survey <websurvey@simpladent.ch>' . "\r\n";




	// Evaluate Data to see if legit
	// Check name length
	if(strlen($name))
	{
		// if(strlen($area_code))
		{
			// Check Length of phone number
			if(strlen($phone))
			{
				// All good, Sned Mail and positive response. Mail Sent to Regional Partner and Swiss Office.
				mail('contact@simpladent.ch', 'Simpladent Customer ' . $_SERVER["HTTP_HOST"], "Type: Call Back \nName: $name \nPhone: $phone  \nLanguage: $language ",$header);
				echo $elements->appointments->getBack;			
			}
			else
			{
				echo "Please fill in your Phone Number";
				header('HTTP/1.0 403 Forbidden');
			}
		}
		// else
		// {
		// 	echo "Please fill in your Area Code";
		// 	header('HTTP/1.0 403 Forbidden');
		// }
	}
	else
	{
		echo "Please fill in your Name";
		header('HTTP/1.0 403 Forbidden');
	}
}

?>




