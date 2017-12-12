<?php //request data from the html file
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$manufacturer =  $_REQUEST['manufacturer'];
$phone =  $_REQUEST['phone'];
$version =  $_REQUEST['version'];
$comment = $_REQUEST['comment'];
$formcontent=" From: $name \n Manufacturer: $manufacturer \n Phone: $phone \n Version: $version \n Comment: $comment";
$recipient = "euki8203@colorado.edu";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

//email, comment, and name are filled out, send email
if (!empty ($_REQUEST['email']) && ($_REQUEST['comment']) && ($_REQUEST['name'])) {
  mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank you $name, your message has been received.";
exit;
}

//if email and comment aren't filled out
if ( (empty ($_REQUEST['email'])) && (empty ($_REQUEST['comment'])) ) {
echo "ERROR, you did not fill in the <b>Email</b> and the <b>Comment</b> body.";
exit;
}

//if email and name aren't filled out
elseif ( (empty ($_REQUEST['email'])) && (empty ($_REQUEST['name'])) ) {
echo "ERROR, you did not fill in the <b>Email</b> and the <b>Name</b> body";
exit;
}

//if name and comment aren't filled out
elseif ( (empty ($_REQUEST['name'])) && (empty ($_REQUEST['comment'])) ) {
echo "ERROR, you did not fill in the <b>Name</b> and the <b>Comment</b> body.";
exit;
}

//if email isn't filled out
elseif (empty ($_REQUEST['email'])) {
echo "ERROR, you did not fill in your <b>Email.</b> body";
exit;
}

//if comment isn't filled out
elseif (empty ($_REQUEST['comment'])) {
echo "ERROR, you did not fill in the <b>Comment</b> body.";
exit;
}

//if name isn't filled out
elseif (empty ($_REQUEST['name'])) {
echo "ERROR, you did not fill in the <b>Name</b> body.";
exit;
}

?>
