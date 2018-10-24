<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cv Chain</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- jQuery js  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- My css -->
        <link href="assets/css/MyStyle.css" rel="stylesheet" type="text/css" /> 

        <!-- blockchain library js -->
        <script src='web3.js-1.0/dist/web3.min.js'></script>
    </head>


    <body id="thongbao" style="background: url(assets/images/background.jpg);background-repeat: no-repeat; background-size: cover;">
  		<p name="accountAddress" hidden="" id="accountAddress"></p>
  		<p hidden="" id="private_key"></p>
    </body>
</html>


<?php include('connect_db.php') ?>
<?php
	$username 			= $_POST['username'];
	$password 			= $_POST['password'];
	$email 				= $_POST['email'];
	$name_school 		= $_POST['name_school'];
	$id_school 			= $_POST['id_school'];
	$accountAddress 	= $_POST['account_address'];
	$private_key		= $_POST['privateKey'];
	

	// create verificationCode
	$verificationCode =  md5(uniqid("CV_CHAIN"));
	$verified = 0;
	//Send Email

	$verificationLink = "http://127.0.0.1:8080/Cv_Chain/verified_account.php?code=".$verificationCode;

	$html_email = "";
	$html_email .= "Hi ". $email.",<br /><br />";

	$html_email .= "Please click the button below to verify your subscription and have access to the download center.<br /><br /><br />";
    $html_email .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";

	$html_email .= "MinLee,<br />";
    $html_email .= "<a href='https://codeofaninja.com/' target='_blank'>The Cv Chain</a><br />";


    $name = "The Cv_Chain";
    $email_sender = "min.lee397@gmail.com";
    $subject = "Verification Link | The CV_CHAIN | Subscription";
    $recipient_email = $email;

	$headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: {$name} <{$email_sender}> \n";


    $body_email = $html_email;

    if(mail($recipient_email, $subject, $body_email, $headers)){    	
    	
 		
 		//saved users to database
 		//Function add user to datadbase and return accountAddress and prev_key for user

		$sql = "INSERT INTO user(USER_NAME, PASSWORD,EMAIL, ID_SCHOOL, NAME_SCHOOL, ACCOUNT_ADDRESS, PRIVATE_KEY, VERIFIED, VERIFICATIONCODE) VALUES ('$username','$password','$email','$id_school','$name_school','$accountAddress','$private_key','$verified','$verificationCode')";

		if ($con->query($sql) === FALSE) {
	    	echo "Lỗi: " . $sql . "<br>" . $con->error;
	    }
	    else
	    {
	    	//Tell user A verification have been sending. 
	    	$text_success = "".
	 		"<div class='col-6 successMessage' id='successMessage'>".
	    		"<div class='col-12 box_v'> A verification email were sent to <b>" . $email . "</b></div>".
	    		"<div class='col-12 box_v'> Please open your <a href='https://mail.google.com'>email</a> inbox and click the given link so you can login.</div>".
	    	"</div>";

	    	echo '<script>'.
	    	'$("#thongbao").html("'.$text_success.'");'.
	    	'$("#successMessage").css("display","block");'.
	    	'</script>';
	    }		
    }
    else
    	echo "Sending Falied";
	
?>