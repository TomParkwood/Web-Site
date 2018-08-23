<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$company = $_POST['company'];
$visitor_email = $_POST['email'];
$items = $_POST['Array[]'];
$further = $_POST['further'];


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
$email_subject = "New Website General Enquiry";
$email_body = "You have received a enquiry from $name @ $company.\n".
    "Here is what they are interested in:\n";
//Get the checkboxes which are clicked

//Error should be on line 36, it cannot call $N, so not sure if i need to define it in another place before i can use it to store the array.
$n = count($items);
for($i=0; $i < $n; $i++)
{
	$email_body .= "  ".($items[$i])."\n";
}

$email_body .= "Any further information: $further.\n";
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
