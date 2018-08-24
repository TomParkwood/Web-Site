<!--General to email-->
<?php
if(!isset($_POST['submit']))
{
  //Dont directly access this form, submit the variables to this form.
  echo "error, you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$page = $_POST['currentpage'];
$information = $_POST['moreinformation'];

//Validate the name and $email
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
$email_subject = "New Website Enquiry";
$email_body = "You have recieved an enquiry from $name\n".
  "The page they are on $page.\n".
  "More information: $information.\n";

$to = "tom@parkwoodsolutions.com";
$headers ="From: $email_from \r\n";
$headers .="Reply-To: $email_from \r\n";
//Send the email
mail($to,$email_subject,$email_body,$headers);
//done, redirect to the thankyou page.
header('Location: thankyou.php');


?>
