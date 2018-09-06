<!--Just Print to Email-->
<?php
if(!isset($_POST['submit']))
{
  //This page isnt meant to be accessed directly.
  echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$pages = $_POST['pages'];
$colour = $_POST['colour'];
$information = $_POST['moreinformation'];

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

$email_from = $visitor_email;
$email_subject = "New Just Print Enquiry";
$email_body = "You have received a new meter reading from $name @ $visitor_email.\n".
    "The monthly volume of pages they print is: $pages. with a colour percentage of $colour.\n".
    "Here is any more information they asked for: $information\n".

$to = "tom@parkwoodsolutions.com";//Address where it will send the Email
$headers = "From: $visitor_email \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done, redirect to the thankyou pages
header('Location: thankyou.php');

//Function to validate against any email injection attempts
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
  $inject = join('|',$injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
      return true;
    }
    else {
      {
        return false;
      }
    }
}
?>
