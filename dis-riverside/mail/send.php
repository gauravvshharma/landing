<?php
  $name=$_POST['name'];
  $mobile=$_POST['mobile'];
  $city=$_POST['city'];
  $cources=$_POST['cources'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  
  // $message1=$_POST['message'];
$to = "dimple.lodiaofficial@gmail.com";
$subject = "Doon International Admission Lead";

$message = "
<html>
<head>
<title>Leads DIS</title>
</head>
<body>
<table rules='all' style='border-color:#666;width:100%;font-family:Helvetica,Arial,sans-serif;background-color:#f7f7f7;color:#333;padding:0;margin:0'>
             <tbody><tr>
             <td>
             <table style='width:80%;background:#ffffff;margin:15px auto;font-size:12px;line-height:18px' cellpadding='10'>
             <tbody><tr>
             </tr>
             <tr><td>Name   : $name</td></tr>
             <tr><td>City   : $city</td></tr>	
             <tr><td>Mobile : $mobile</td></tr>	
             <tr><td>Mobile : $email</td></tr>	
             <tr><td>course : $cources</td></tr>
             <tr><td>Source : $subject</td></tr>
             <tr>
             <td style='padding:0 5px'>
             <table style='font-size:12px;line-height:18px;margin:0;padding:0'>
             </table>
             </td>
             </tr>
             </tbody></table>
             </td></tr></tbody></table></body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <leads@jbcollege.in>' . "\r\n";

$ok=mail($to,$subject,$message,$headers);

if ($ok){
  echo "Thanks! Your form has been sent successfully.";
  die();
}else{
   echo "Your form is not submitted. Please Call 9811999868 Now";
}

?>
