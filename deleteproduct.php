<?php
SESSION_START();
include 'config.php';
ob_start();

					   
			$uname=$_GET['uname'];
			$position=$_GET['position'];
		   $value=$_GET['sno'];
			$delete="DELETE from `product_add` WHERE `sno`='".$value."'";
			$delete_qry=mysqli_query($con,$delete);
           if($delete_qry){
               header("Location:addproduct.php?position=".$_GET['position']."&uname=".$_GET['uname']);
             }else{
				 echo "<script>
		         alert('Your Request Failed,Try Again..!');
		</script>";
			 }



?>