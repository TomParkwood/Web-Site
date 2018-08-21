<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$company = $_POST['company'];
$visitor_email = $_POST['email'];
$manufacturer = $_POST['manufacturer'];
$model = $_POST['model'];
$serial = $_POST['serial'];
$mono = $_POST['mono'];
$colour = $_POST['colour'];

//Validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $visitor_email;//<== update the email address
$email_subject = "New Website Meter Reading";
$email_body = "You have received a new meter reading from $name @ $company.\n".
    "Here is the machine. $manufacturer $model $serial.\n".
		"Mono Count: $mono. \n".
		"Colour Count: $colour. \n".

$to = "tom@parkwoodsolutions.com";//<== update the email address
$headers = "From: $visitor_email \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
