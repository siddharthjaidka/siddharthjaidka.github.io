<?php
$EmailFrom = "siddharthjaidka@gmail.com";
$EmailTo = "siddharth292@gmail.com";
$Subject = "Oneiros '17 Feedback";
$sub = Trim(stripslashes($_POST["subject"])); 
$msg= Trim(stripslashes($_POST["message"]));
$name= Trim(stripslashes($_POST["name"])); 
$contact= Trim(stripslashes($_POST["contact"])); 

$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Contact: ";
$Body .= $contact;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $sub;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $msg;
$Body .= "\n";
// send email 
if("" == $name || ""== $msg || ""==$sub ||""==$contact ){
 echo "failed";
}
else{
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
// redirect to success page 
if ($success){
  echo "success";
}
else{
 echo "failed";
}
}

?>