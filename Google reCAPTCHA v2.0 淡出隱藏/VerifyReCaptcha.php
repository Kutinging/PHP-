<?php
$ReCaptchaResponse=filter_input(INPUT_POST, 'reCaptchaResponse');
$secretkey = "enter your secretkey at here";
$Response=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'"&response='.$ReCaptchaResponse."&remoteip=".$_SERVER['REMOTE_ADDR']);
echo ($Response)?'OK':'ERROR';
?>