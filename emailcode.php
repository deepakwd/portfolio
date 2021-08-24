<?php
if(isset($_POST['esend'])){
$to = "deepakmepl101@gmail.com";
$subject= "enquery";
$messge = $_POST['emessage'];;
$from = $_POST['email'];;
$header = "From: $from";

if(mail($to, $subject, $messge, $header)){
    echo "message send";
}else{
    echo "fail";
}
}
?>

