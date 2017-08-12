<?php
$field_name = $_POST['Name'];
$field_email = $_POST['Email'];
$field_subject = $_POST['Subject'];
$field_message = $_POST['message'];

$mail_to = 'pythonbrilliant@gmail.com';
$mail_to1 = 'info@investunbiased.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Subject: '.$field_subject."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);
$mail_status1 = mail($mail_to1, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you our representative will reply back shortly.');
        window.location = 'index.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Something went wrong. Please try again or contact at info@investunbaised.com');
        window.location = 'index.html';
    </script>
<?php
}

?>