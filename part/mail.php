<!doctype html>
<html lang="en-UK">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="we develop the workforce for the future.">
    <meta name="author" content="DT Solutions">
    <title>Dew - developing the work-force for the future.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/vendors.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "../index.php"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
<?php
						$mail = $_POST['email'];
						$to = "info@dew.com.ng";/* YOUR EMAIL HERE */
						$subject = "Registration for iTech Impact";
						$headers = "From: Registration for iTech Impact <noreply@dew.com.ng>";
						$message = "Personal Details.\n";
						$message .= "\nFirst name: " . $_POST['firstname'];
						$message .= "\nLast name: " . $_POST['lastname'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nTelephone: " . $_POST['telephone'];
						$message .= "\nAge: " . $_POST['age'];
						$message .= "\nGender: " . $_POST['gender'];
						$message .= "\nTerms and conditions accepted: " . $_POST['terms']. "\n";

						$message .= "\nOther Details.";
						$message .= "\nProfession: " . $_POST['profession'];
						$message .= "\nStatus: " . $_POST['status'];

						$message .= "\nHow did you hear about us.\n" ;
						foreach($_POST['question_2'] as $value)
							{
							$message .=   "- " .  trim(stripslashes($value)) . "\n";
							};

						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);

						//Confirmation page
						$user = "$mail";
						$usersubject = "Thank You";
						$userheaders = "From: info@dew.com.ng\n";
						/*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Thank you for your time. Your request is successfully submitted. We will reply shortly.\n\nBELOW A SUMMARY\n\n$message";
						mail($user,$usersubject,$usermessage,$userheaders);

?>
<!-- END SEND MAIL SCRIPT -->

<div id="success">
    <div class="icon icon--order-success svg">
         <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
          <g fill="none" stroke="#8EC343" stroke-width="2">
             <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
             <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
          </g>
         </svg>
     </div>
	<h4><span>Request successfully sent!</span>Thank you for your time</h4>
	<small>You will be redirect back in 5 seconds.</small>
</div>
</body>
</html>
