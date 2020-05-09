<?php 
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject= $_REQUEST['subject'];
$message= $_REQUEST['message'];
$myfile = fopen("message.txt", "a") or die("Unable to open file!");
$txt =$name.'|'.$email.'|'.$subject.PHP_EOL.$message.PHP_EOL.'-----------------------------------------'.PHP_EOL ;
fwrite($myfile, $txt);
fclose($myfile);
?>