<?php
  /**
  * Requires the PHP Mail Form library
  * The PHP Mail Form library is available only in the pro version of the template
  * The library should be uploaded to: lib/php-mail-form/php-mail-form.php
  * For more info and help: https://templatemag.com/php-mail-form/
  */


  $contactform = new PHP_Mail_Form;
  $contactform->ajax = true;

  // Replace with your real receiving email address
  $contactform->to = 'admin@fadhel.app';
  $contactform->from_name = $_POST['name'];
  $contactform->from_email = $_POST['email'];
  $contactform->subject = $_POST['subject'];
  $contactform->message = $_POST['message'];


  // $contactform->add_message( $_POST['name'], 'From');
  // $contactform->add_message( $_POST['email'], 'Email');
  // $contactform->add_message( $_POST['message'], 'Message', 10);

  echo $contactform->send();
?>
