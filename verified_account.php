<?php include('connect_db.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cv Chain</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />       
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

        <!-- jQuery js  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- My css -->
        <link href="assets/css/MyStyle.css" rel="stylesheet" type="text/css" /> 

        <!-- My JS -->
        <script src="assets/js/myJS.js"></script>
    </head>


    <body id="thongbao" style="background: url(assets/images/background.jpg);background-repeat: no-repeat; background-size: cover;">
    	<div class='container successMessage' id='successMessage'>
    		<div class='row box_v'>
    			<div class="col" id="notice_email"></div>
			</div>
			<div class='row box_v'>
    			<div class="col">Please Copy your <b> address </b> and <b> private key </b> to anywhere!!!</div>
			</div>
    		<div class='row box_v'>
    			<div class="col-sm-6 return_value">
    				<div class="row"><div class="col caption_return_value">Account Adress</div></div>
    				<div class="row">
    					<p hidden="" id='text_acc_add'></p>
    					<div class="col btn_copy"><button type="button" id="button_acc_add" value="0" class="btn btn-warning"><i class="fa fa-clipboard"></i></button></div>
    				</div>
    			</div>
    			<div class="col-sm-6 return_value">
    				<div class="row"><div class="col caption_return_value">Private Key</div></div>
    				<div class="row">
    					<p hidden="" id='text_prv_key'></p>
    					<div class="col btn_copy"><button id="button_prv_key" type="button" class="btn btn-warning "><i class="fa fa-clipboard"></i></button></div>
    				</div>
    			</div>
    			
			</div>
    		<div class='row box_v'><div class="col"> Then open <a href='./login.php'>The CV Chain</a> to login</div>
    		</div>
	    </div> 

	   	
    </body>
</html>

<?php
	$code =  $_GET['code'];
	$sql = "SELECT * FROM user WHERE VERIFICATIONCODE = '".$code."'";

	if ($result=mysqli_query($con,$sql)){

	 	if($rowcount=mysqli_num_rows($result)>0){

	 		$sql_update = "UPDATE user set verified='1' WHERE VERIFICATIONCODE = '".$code."'";	 				  	
	  		if($rs = mysqli_query($con,$sql_update)){

	  			echo '<script>'.
		    	'$("#successMessage").css("display","block");'.
		    	'</script>';

		    	foreach ($result as $row)
	 			{
	 				echo '<script>'.
	 					'$("#notice_email").html("Your <b>'.$row['EMAIL'].' </b> is valid, thanks!. <br /> You may now login.");'.
	 					'$("#text_acc_add").html("'.$row['ACCOUNT_ADDRESS'].'");'.
	 					'$("#text_prv_key").html("'.$row['PRIVATE_KEY'].'");'.
	 				'</script>';
	 			}
                
	  		}	  		
	 	}
  	}

?>