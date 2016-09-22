<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

//Your credentials
$mg = new Mailgun("key-9d6cb3f7fb70b594a4fdd2062a72ba74");
$domain = "mg.ivanlucasgoncalves.com.br";

// Create array of courses
$courses = array();

 // If most_enjoy, add to array
if (isset($_POST['most_enjoy'])) { $courses[] = $_POST['most_enjoy']; }
// If want_improve, add to array
if (isset($_POST['want_improve'])) { $courses[] = $_POST['want_improve']; }
// If want_to, add to array
if (isset($_POST['want_to'])) { $courses[] = $_POST['want_to']; }

// Remove duplicates from array
$courses = array_unique($courses);


// Vars to catch all values from the form
$name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
$email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
$phone = isset($_POST['phone']) ? strip_tags($_POST['phone']) : '';

$subject = "EduSales | $name";
$header = file_get_contents('email/header.php'); //Get Header HTML
$footer = file_get_contents('email/footer.php'); //Get Footer HTML
$message = $header .
      '<br/><p>Hi,' .
      '<br/>You have received a response from the EduSales.</p>' .
      '<p><strong>Ideal for you:</strong> ' . implode(' | ', $courses) . '</p>' .
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
