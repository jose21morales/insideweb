<?php

require("../model/confirm_mail.model.php");

$mail_verify = new Verify_mail();
$msg = $mail_verify->getVerify();

require("../view/confirm_mail.view.php");

?>