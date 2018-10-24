<?php include('connect_db.php') ?>


<?php
	$name 				= $_POST['studentname'];
	$gender 			= $_POST['studentgender'];
	
	$rank 				= $_POST['studentrank'];
	$iduser 			= $_POST['iduser'];

		$sql = "INSERT INTO diploma(ID_DIPLOMA,idUser,NAME, GENDER, ID_MAJOR, RANK,TXT_QRCODE)
		 VALUES ('D4','$iduser','$name','$gender','MG14','$rank','https://www.google.com.vn/')";

		if ($con->query($sql) === FALSE) {
	    	echo "Lỗi: " . $sql . "<br>" . $con->error;
	    }
	    else
	    {
	    	echo "Thêm thành công";
	    }		

	 

?>