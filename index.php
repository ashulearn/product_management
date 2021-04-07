<?php
SESSION_START();
include 'config.php';
ob_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Product</title>
		<meta charset="utf-8">
	    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="bootstrap.min.css">
			<link rel="stylesheet" href="styles/styles.css">
        <script src="bootstrap.min.js"></script>
	    <script src="jquery.min.js"></script>
		<style>
		
		</style>
 <script type="text/javascript">
  window.history.forward();
	function noback()
	{
		window.history.forward();
	}
  
  </script>
	 </head>
	<body>
	<div class="col-sm-12 col-md-12 col-lg-12 logo_bg" >
	       <img src="images/rci_randqa.png" />
		   </div>
	   <div class="container-fluid" style="border:1px solid green;">
	       <div class="col-sm-12 col-md-12 col-lg-12 "> 
				<h1 align='center'>PRODUCT QUALITY RANKING</h1>
		    
		   </div>  
		   <div class="col-sm-12 col-md-12 col-lg-12 " style="padding:10px;"> 
		  <marquee  name="welcome" id="welcome" >Please Add a Product for Product Quality Ranking</marquee>
		   
		   </div>
	      
		  
	       <div class="col-sm-12 col-md-12 col-lg-12" style="padding:10px;">    
	          <div class="col-sm-3 col-md-3 col-lg-3"> </div> 
			  <div class="col-sm-6 col-md-6 col-lg-6">
			    <div class="row" id="item_entr">
					    <form class="form-horizontal" action="" method="POST" role="form">
						
						<div class="col-sm-12">
							<label  class="control-label col-sm-8" style="margin-left:50px;margin-bottom:10px;font-weight: bold;font-size: 24px;color:#9900cc;">WELCOME TO LOGIN</label>
						 </div>
							<div class="form-group" style="margin-top:20px;">
							      <label  class="control-label col-sm-4">Username : </label>
									 <div class="col-sm-6">
										<input type="text" class="form-control" name="user_name" id="user_name" />
									 </div>
							 </div>
							 <div class="form-group">
							      <label  class="control-label col-sm-4">Password : </label>
									 <div class="col-sm-6">
										<input type="password" class="form-control" name="password" id="password" />
									 </div>
							 </div>
							 <div class="col-sm-11">
							      <center>
								    <span class="icon-lock icon-white"></span><input type="submit" class="btn btn-danger" name="login" id="login" style="width:120px;" value="Login" />
								  </center>
							 </div>
							 </form>
						   </div>
			    
			  </div>
			  <div class="col-sm-3 col-md-3 col-lg-3"></div> 
		   </div>	  
		  
     
	
	 </div>
	 
	 
	 <?php
if(isset($_POST['login'])){
	$uname=$_POST['user_name'];
	$pswd=$_POST['password'];
	$query="SELECT * FROM `login` WHERE `username`='$uname' and `password`='$pswd'";
	//echo $query;
    $sql=mysqli_query($con,$query);
	if($fetch_row=mysqli_fetch_array($sql)){
		
		$_SESSION['username']=$uname;
		$_SESSION['password']=$pswd;

		if($fetch_row['position'] == '0')
		{
		header("location:home.php?position=".$fetch_row['position']."&uname=".$fetch_row['username']);	
			exit;
		}else if($fetch_row['position'] == '1'){
		header("location:home.php?position=".$fetch_row['position']."&uname=".$fetch_row['username']);	
			exit;	
		}	
		
	}
	else{
		echo"<script>myfunction()</script>";
	}
		
}
?>
	 
	</body>
</html>
