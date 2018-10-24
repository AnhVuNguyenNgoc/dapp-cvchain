<?php     
session_start();

    if(isset($_POST['submit_login']))
    {

    	include('connect_db.php');


    	$check_username = $_POST['username_login'];	//lấy thông username để kiểm tra có tồn tại trong database không ?
    	$check_password = $_POST['password_login'];	//lấy thông password để kiểm tra có tồn tại trong database không ?

    	//Câu truy vấn để kiểm tra trong database
    	$sql = "SELECT * FROM user WHERE USER_NAME='".$check_username."' AND PASSWORD='".$check_password."'";
		
		if ($result=mysqli_query($con,$sql)){	

			$rowcount=mysqli_num_rows($result);
			
			if($rowcount>0)
			{
				$_SESSION['username'] = $check_username;
				header("Location: index.php");
			}
			else
			{
				echo "<script>
					alert('Sai mật khẩu hoặc tài khoản!!!');
					window.location='login.php';
				</script>";				

			}
		}
		else
		{
			echo "false";
		}
    }
?>