<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$webmaster_email = "daniel.grumer@gmail.com";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$feedback_page = "index.html";
$thankyou_page = "thank_you.html";

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email_address = $_REQUEST['email_address'] ;

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string); 
    }


$email_message .= "המייל שלי: ".clean_string($email_address)."\n";

mail("$webmaster_email","פונט אברהם",$email_message,"From: $email_address");
  //  echo "Thank you for sending us feedback";

header( "Location: $thankyou_page" );

?>