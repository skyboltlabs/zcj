<?php 
ob_start();
session_start();

if (isset($_POST['send_mail'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailTo = "chenje@zcjsolutions.com";
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

if(mail($mailTo, $subject, $txt, $headers))
{
  header("Location: ../contact.php");
  $_SESSION['response'] = "Your message has been sent. Thank you!";
  $_SESSION['res_type'] = "success";
}
else
{
  header("Location: ../contact.php");
  $_SESSION['response'] = "Message sent failed!";
  $_SESSION['res_type'] = "danger";
}
}
?>

<?php ob_end_flush(); ?>