<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

//Your credentials
$mg = new Mailgun("key-9d6cb3f7fb70b594a4fdd2062a72ba74");
$domain = "mg.ivanlucasgoncalves.com.br";

// Vars to catch all values from the form
$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
$phone = isset($_POST['phone']) ? strip_tags($_POST['phone']) : '';
$most_enjoy = isset($_POST['most_enjoy']) ? strip_tags($_POST['most_enjoy']) : '';
$want_improve = isset($_POST['want_improve']) ? strip_tags($_POST['want_improve']) : '';
$want_to = isset($_POST['want_to']) ? strip_tags($_POST['want_to']) : '';

$subject = "EduSales | $name";
$header = file_get_contents('email/header.php'); //Get Header HTML
$footer = file_get_contents('email/footer.php'); //Get Footer HTML
$message = $header .
      '<br/><p>Hi,' .
      '<br/>You have received a response from the EduSales.</p>' .
      '<p><strong>Ideal for you:</strong> '.$most_enjoy.' | '.$want_improve.' | '.$want_to.'</p>' .
      '<p><strong>Name:</strong> '.$name.'</p>' .
      '<p><strong>Email:</strong> '.$email.'</p>' .
      '<p><strong>Phone:</strong> '.$phone.'</p>' .
      '<p><br/>Please contact '.$name.' about this enquiry.' .
      '<br/>Thank you.</p><br/>' .
      $footer;

// Result should set up before the header
$result = $mg->sendMessage($domain, array(
  'from'    => 'Ivan Lucas <ivan.goncalves@gotamio.com>',
  'to'      => 'Ivan Lucas <ivan.goncalves@gotamio.com>',
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
