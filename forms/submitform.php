<?php
$NewContactRequestType = $_GET['Type'];
$NewContactRequestBody = $_GET['body'];
$NewContactRequestName = $_GET['Name'];
$NewContactRequestEmail = $_GET['Email'];
$NewContactRequestDate = date("H:i dS F");
$myfile = fopen("contact-requests.txt", "a");
$NCRD = "New Contact Request:  $NewContactRequestDate";
$NCRE =  "Email: $NewContactRequestEmail"; 
$NCRT = "Type: $NewContactRequestType";
$NCRN = "Name: $NewContactRequestName";
$NCRM = "Message: $NewContactRequestBody";
fwrite($myfile, $NCRD."\n");
fwrite($myfile, $NCRN."\n");
fwrite($myfile, $NCRE."\n");
fwrite($myfile, $NCRT."\n");
fwrite($myfile, $NCRM."\n");
fwrite($myfile, "\n");
fclose($myfile);

header('Location: /forms/thank-you');
?>
