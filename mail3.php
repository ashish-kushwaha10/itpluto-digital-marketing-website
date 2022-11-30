<?php



$userName = $_POST['name'];
// $userLesson = $_POST['dropdown'];
$userEmail = $_POST['email'];
$userMobileNo = $_POST['mobileNo'];

$to = "admin@adbigo.com";

$subject = "AdBigo Marketing ";

$body .= "From: ".$userName. "\r\n"; 
// $body .="userLesson: ".$userLesson. "\r\n";
$body .= "Email: ".$userEmail. "\r\n"; 
$body .= "MobileNo: ".$userMobileNo. "\r\n";

$headers = "From: admin@adbigo.com" . "\r\n" .
"CC:contact.ashishkushwaha@gmail.com";



    mail($to,$subject,$body,$headers);




//redirect page
 header("Location:thankyou.html");






?>