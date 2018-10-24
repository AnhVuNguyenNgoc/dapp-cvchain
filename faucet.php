<?php
if(isset($_POST['submit_send_facuet']))
{
	header('Location: https://faucet.ropsten.be/donate/'.$_GET['add']);
	echo "<script>
		alert('Bạn đã nhận được 1 ether từ faucet');
		window.location = 'index.php';
	</script>";
}
?>


<!-- Start content -->
    <div class="content">
        <div class="container-fluid">
        	<form method="POST">
	        	<div class="row">
	        		<div class="col caption_faucet">NHẬN 1 ETHER TỪ FAUCET</div>
	        	</div>
	        	<div class="row faucet_content">
	        		<div class="col-12 caption_send_faucet">ĐỊA CHỈ CỦA BẠN:
	        		</div>
	        		<div class="col-12 value_send_faucet"><?php echo $_GET['add'] ?>
	        		</div>
	        		<div class="col-12"><button class="btn btn-primary" type="submit" name="submit_send_facuet">Gửi yêu cầu</button></div>
	        	</div>
	        </form>     	
        </div>
    </div>
<!-- End content -->