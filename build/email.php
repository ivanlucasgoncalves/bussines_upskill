<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

//Your credentials
$mg = new Mailgun("key-969eeee999f4fd5c20ff2ed600cfeacf");
$domain = "mg.entamio.com";

// Vars to catch all values from the form
$company = isset($_POST['company']) ? strip_tags($_POST['company']) : '';
$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
$phone = isset($_POST['phone']) ? strip_tags($_POST['phone']) : '';

$subject = "Strategy One | $company";
$header = file_get_contents('email/header.php'); //Get Header HTML
$footer = file_get_contents('email/footer.php'); //Get Footer HTML
$message = $header .
      '<br/><p>Hi,' .
      '<br/>You have received a response from the Strategy 1 Landing page.</p>' .
      '<p><strong>Name:</strong> '.$name.'</p>' .
      '<p><strong>Company:</strong> '.$company.'</p>' .
      '<p><strong>Email:</strong> '.$email.'</p>' .
      '<p><strong>Phone:</strong> '.$phone.'</p>' .
      '<p><br/>Please contact '.$name.' about this enquiry.' .
      '<br/>Thank you.</p><br/>' .
      $footer;

// Result should set up before the header
$result = $mg->sendMessage($domain, array(
  'from'    => 'Entamio Education Group <nextstep@entamio.com>',
  'to'      => 'Entamio Education Group <nextstep@entamio.com>',
  'subject' => $subject,
  'text'    => strip_tags($message),
  'html'    => $message
));

// Assuming we made it this far!
/*if ($result) {
  header('HTTP/1.1 200 OK');
  header('Content-type: application/json');
  echo json_encode('Mail sent successfully');
}*/
